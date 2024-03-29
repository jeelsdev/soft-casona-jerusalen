<?php

namespace App\Livewire\Admin\Reservation;

use App\Models\Reservation;
use App\Models\ReservationStatus;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateReservation extends Component
{
    public $open = false;
    public $data;
    public $rooms = [];
    public $users = [];
    public $statuses = [];

    #[Validate('required')]
    public $start_date;

    #[Validate('required')]
    public $end_date;

    #[Validate('required')]
    public $room_id;

    #[Validate('required')]
    public $user_id;

    #[Validate('required')]
    public $origin;

    #[Validate('required')]
    public $status_id;

    #[Validate('required')]
    public $total;

    #[On('openModal')]
    public function openModal($data)
    {
        $start_date = Carbon::parse($data['date'] ? $data['date'] : $data['date'])->format('Y-m-d');
        $this->room_id = $data['resource']['id'];
        $this->open = true;
        $this->start_date = $start_date;
    }

    public function save()
    {
        $this->validate();

        Reservation::create([
            'entry_date' => $this->start_date,
            'exit_date' => $this->end_date,
            'room_id' => $this->room_id,
            'status_id' => $this->status_id,
            'origin' => $this->origin,
            'total' => $this->total,
        ]);

        $this->reset(['start_date', 'end_date', 'room_id', 'status_id', 'origin', 'total']);
        $this->dispatch('create-reservation');
        $this->open = false;
    }

    public function render()
    {
        $this->users = User::all();
        $this->statuses = ReservationStatus::all();
        $this->rooms = Room::all();
        return view('livewire.admin.reservation.create-reservation');
    }
}
