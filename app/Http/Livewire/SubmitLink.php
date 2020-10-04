<?php

namespace App\Http\Livewire;

use App\ClientInterface;
use Livewire\Component;

class SubmitLink extends Component
{
    public $title;
    public $name;
    public $email;
    public $website;
    public $description;
    public $tags;

    public $avaliableTags;

    protected array $rules = [
        'title' => 'required',
        'name' => 'required',
        'email' => 'required',
        'website' => 'required',
        'description' => 'required',
        'tags' => 'required',
    ];

    public function __construct()
    {
        parent::__construct();
        $this->client = resolve(ClientInterface::class);
        $this->avaliableTags = $this->client->getTags()->all();
    }


    public function submit(): void
    {
        $this->validate();

        $this->tags = collect($this->tags)->filter(function($item){
            return $item === true;
        })->all();

        // Execution doesn't reach here if validation fails.
        dump($this->tags);
    }

    public function render()
    {
        return view('livewire.submit-link');
    }
}
