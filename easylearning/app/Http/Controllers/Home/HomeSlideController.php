<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlide;
use Illuminate\Http\Request;

use Intervention\Image\Laravel\Facades\Image;
class HomeSlideController extends Controller
{
    //
    public function HomeSlider()
    {
        $homeslide = HomeSlide::find(1);
        return view("admin.home_slide.home_slide_all", compact("homeslide"));
    }//End Method


    public function UpdateSlider(Request $request)
    {
        $slide_id = $request->id;

        if ($request->file('home_slide')) {
            $image = $request->file('home_slide');
            //@unlink(public_path('upload/home_slide/' . $request->old_image));
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)                 // If using v3
                ->resize(636, 852)
                ->save(public_path('upload/home_slide/' . $name_gen));

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                'home_slide' => 'upload/home_slide/' . $name_gen,

            ]);

            $notification = array(
                'message' => 'Home Slide Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } else {
            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,

            ]);

            $notification = array(
                'message' => 'Home Slide Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }

    }




}
