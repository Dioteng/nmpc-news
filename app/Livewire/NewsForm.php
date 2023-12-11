<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\UploadedFile;

class NewsForm extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $success;
    
    // Form Fields
    public $title;
    public $body;
    public $tags;
    public $image;
    public $newsId;

    public $pages = [1, 2, 3, 4];

    private $validationRules = [
        1 => [
            'title' => ['required', 'string', 'max:255'],
            'tags' => ['required', 'string', 'max:255'],
        ],
        2 => [
            'body' => ['required', 'string'],
        ],
        3 => [
            'image' => ['nullable'],
        ],
    ];

    public function mount($newsId = null)
    {
        $this->newsId = $newsId;

        if ($newsId) {
            $news = News::find($newsId);
            $this->title = $news->title;
            $this->body = $news->body;
            $this->tags = $news->tags;
            $this->image = $news->image;
        }
    }

    public function goToNextStep() {
        $this->validate($this->validationRules[$this->currentStep]);
        $this->currentStep++;
    }

    public function goToPreviousStep() {
        $this->currentStep--;
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function submit()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);

        if($this->image instanceof UploadedFile) {
            $this->image = $this->image->store('news-images', 'public');
        }

        if ($this->newsId) {
            $news = News::find($this->newsId);
            $updateData = [
                'title' => $this->title,
                'tags' => $this->tags,
                'body' => $this->body,
            ];

            if ($this->image) {
                $updateData['image'] = $this->image;
            }

            $news->update($updateData);
        } else {
            News::create([
                'title' => $this->title,
                'tags' => $this->tags,
                'body' => $this->body,
                'image' => $this->image,
                'user_id' => auth()->id(),
            ]);
        }
    
        $this->reset();
        $this->resetValidation();

        return redirect('/')->with('message', 'News posted successfully');
    }

    public function render()
    {
        return view('livewire.news-form')->layout('layouts.app');
    }
}
