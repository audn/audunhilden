@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')

    @section('title', ' Audun Hilden')

    {{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
    @section('body')

    <!-- @include('_partials.header-project') -->


    <div class="center-div text-white">
      <div class="row wrapper no-valign-wrap-on-mobile">
        <div class="col s12 l19 desktop">
          <h1 class="project_title text-center" style="margin-top:8.5rem;">
           title
        </h1>
        <div class="project_text text-center mt-6">
          - desc
        </div>
        <p>
          <br>
          <div class="wrapperwork">
            <div class="featured-image center-oldclass">
              <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8">
                  <div class="browser">
                    <div class="header">
                      <ul class="dots">
                        <li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li>
                      </ul>
                    </div>
                    <img class="img-fluid" src="img/froendesktop.png" alt="Website" style="border:1px solid #eaedf2;">
                  </div>

                  <h1 class="project_title text-center" style="margin-top:12.5rem;">
                    Services
                  </h1>
                  <div class="project_text text-center mt-6">
                    Web-Design, Mobile Design, Email services, CMS, Responsive
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
