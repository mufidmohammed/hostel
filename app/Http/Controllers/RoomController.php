<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();

        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'room_number' => 'required|numeric|unique:rooms,room_number',
            'number_of_people' => 'required|numeric',
            'max_capacity' => 'required|numeric',
            'fee_per_person' => 'required|numeric',
            'total_fees' => 'required|numeric',
            'status' => 'required'
        ]);

        Room::create($data);

        session()->flash('message', 'Room added successfully');

        return to_route('rooms.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $this->validate($request, [
            'room_number' => "required|numeric",
            'number_of_people' => 'required|numeric',
            'max_capacity' => 'required|numeric',
            'fee_per_person' => 'required|numeric',
            'total_fees' => 'required|numeric',
            'status' => 'required'
        ]);

        $room->room_number = $request->room_number;
        $room->number_of_people = $request->number_of_people;
        $room->max_capacity = $request->max_capacity;
        $room->fee_per_person = $request->fee_per_person;
        $room->total_fees = $request->total_fees;
        $room->status = $request->status;
        $room->save();

        session()->flash('message', 'Record updated successfully');

        return to_route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room::destroy($id);

        session()->flash('message', 'Record deleted successfully');

        return to_route('rooms.index');
    }
}
