@extends("frontend.master")

 <!-- BEGIN sections: content_1group -->
 @section('banner')
    @include("frontend.home.contents.banner")
 @endsection
 <!-- END sections: content_1group -->

<!-- BEGIN sections: containt_13-group -->
@section("content_13")
    @include("frontend.home.contents.content_13")
@endsection
<!-- END sections: containt_13-group -->

<!-- BEGIN sections: containt_12-group -->
@section("content_12")
    @include("frontend.home.contents.content_12")
@endsection
<!-- END sections: containt_12-group -->
<!-- BEGIN sections: about-group -->
@section("about")
    @include("frontend.home.contents.about")
@endsection
<!-- END sections: about-group -->
