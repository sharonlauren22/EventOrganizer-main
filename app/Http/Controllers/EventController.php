<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use App\Models\Organizer;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event_page()
    {
        $events = Event::all();
        return view("events",  ['page' => 'events', 'events' => $events]);
    }

    public function detail_event_page($id)
    {
        $event = Event::find($id);
        return view("detail_event", ['page' => 'events', 'event' => $event]);
    }

    // =============================== MASTER EVENT

    public function master_event_page()
    {
        $events = Event::all();
        return view("event.event", ['page' => 'master', 'events' => $events]);
    }

    public function master_event_addpage()
    {
        $categories = EventCategory::all();
        $organizers = Organizer::all();
        return view("event.event_add", [
            'page' => 'master',
            'categories' => $categories,
            'organizers' => $organizers
        ]);
    }

    public function master_event_add(Request $request)
    {
        Event::create([
            'title' => $request->input('title'),
            'venue' => $request->input('venue'),
            'date' => $request->input('date'),
            'start_time' => $request->input('start_time'),
            'description' => $request->input('description'),
            'booking_url' => $request->input('booking_url'),
            'tags' => $request->input('tags'),
            'organizer_id' => $request->input('organizer_id'),
            'event_category_id' => $request->input('event_category_id'),
        ]);

        return redirect("/master/event");
    }
    public function master_event_editpage($id)
    {
        $event = Event::find($id);
        $categories = EventCategory::all();
        $organizers = Organizer::all();
        return view("event.event_edit", [
            'page' => 'master',
            'categories' => $categories,
            'organizers' => $organizers,
            'event' => $event
        ]);
    }

    public function master_event_edit(Request $request, $id)
    {
        Event::where('id', $id)->update(
            [
                'title' => $request->input('title'),
                'venue' => $request->input('venue'),
                'date' => $request->input('date'),
                'start_time' => $request->input('start_time'),
                'description' => $request->input('description'),
                'booking_url' => $request->input('booking_url'),
                'tags' => $request->input('tags'),
                'organizer_id' => $request->input('organizer_id'),
                'event_category_id' => $request->input('event_category_id'),
            ]
        );
        return redirect("/master/event");
    }

    public function master_event_delete($id)
    {
        Event::destroy($id);
        return redirect("/master/event");
    }


    //================================ ORGANIZER

    public function master_organizer_page()
    {
        $organizers = Organizer::all();
        return view("organizer.organizer", ['page' => 'master', 'organizers' => $organizers]);
    }

    public function master_organizer_add(Request $request)
    {
        Organizer::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'facebook_link' => $request->input('facebook_link'),
            'x_link' => $request->input('x_link'),
            'website_link' => $request->input('website_link'),
        ]);
        return redirect("/master/organizer");
    }

    public function master_organizer_delete($id)
    {
        Organizer::destroy($id);
        return redirect("/master/organizer");
    }

    public function master_organizer_edit(Request $request, $id)
    {
        Organizer::where('id', $id)->update(
            [
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'facebook_link' => $request->input('facebook_link'),
                'x_link' => $request->input('x_link'),
                'website_link' => $request->input('website_link'),
            ]
        );
        return redirect("/master/organizer");
    }
    public function master_organizer_detailpage($id)
    {
        $organizer = Organizer::find($id);
        return view("organizer.organizer_detail", ['page' => 'master', 'organizer' => $organizer]);
    }



    public function master_organizer_addpage()
    {
        return view("organizer.organizer_add", ['page' => 'master']);
    }

    public function master_organizer_editpage($id)
    {
        $organizer = Organizer::find($id);
        return view("organizer.organizer_edit ", ['page' => 'master', 'organizer' => $organizer]);
    }

    //================================ CATEGORY

    public function master_event_category_page()
    {
        $categories = EventCategory::all();
        return view("event_category.event_category", ['page' => 'master', 'categories' => $categories]);
    }

    public function master_event_category_add(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);
        EventCategory::create(['name' => $request->input('category_name'),]);

        return redirect("/master/event_category");
    }

    public function master_event_category_delete($id)
    {
        $category = EventCategory::destroy($id);
        return redirect("/master/event_category");
    }

    public function master_event_category_edit(Request $request, $id)
    {
        $category = EventCategory::where('id', $id)->update(['name' => $request->input('category_name')]);
        return redirect("/master/event_category");
    }


    public function master_event_category_addpage()
    {
        return view("event_category.event_category_add", ['page' => 'master']);
    }

    public function master_event_category_editpage($id)
    {
        $category = EventCategory::find($id);
        return view("event_category.event_category_edit ", ['page' => 'master', 'category' => $category]);
    }
}
