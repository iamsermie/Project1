<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
class AboutController extends Controller
{
    public function AboutUpdate()
    {
        $aboutslide = About::find(1);
        return view("admin.about_slide.about_slide_all", compact("aboutslide"));
    }//End M


    public function AboutEdit(Request $request)
    {
        $about_id = $request->id;

        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            //@unlink(public_path('upload/home_slide/' . $request->old_image));
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)                 // If using v3
                ->resize(523, 605)
                ->save(public_path('upload/about_slide/' . $name_gen));

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => 'upload/about_slide/' . $name_gen,

            ]);

            $notification = array(
                'message' => 'About Page Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } else {
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,

            ]);

            $notification = array(
                'message' => 'About page Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }

    }

    public function AboutPage()
    {
        $homeslide = About::find(1);
        return view("frontend.about.main_about", compact("homeslide"));
    }//End Method

}
