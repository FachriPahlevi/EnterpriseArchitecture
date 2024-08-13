@extends('voyager::master')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="{{ $dataType->icon }}"></i> {{ $dataType->getTranslatedAttribute('display_name_plural') }}
        </h1>
        @can('add', app($dataType->model_name))
            <a href="{{ route('voyager.'.$dataType->slug.'.create') }}" class="btn btn-success btn-add-new">
                <i class="voyager-plus"></i> <span>{{ __('voyager::generic.add_new') }}</span>
            </a>
        @endcan
        @can('delete', app($dataType->model_name))
            @include('voyager::partials.bulk-delete')
        @endcan
        @can('edit', app($dataType->model_name))
            @if(!empty($dataType->order_column) && !empty($dataType->order_display_column))
                <a href="{{ route('voyager.'.$dataType->slug.'.order') }}" class="btn btn-primary btn-add-new">
                    <i class="voyager-list"></i> <span>{{ __('voyager::bread.order') }}</span>
                </a>
            @endif
        @endcan
        @can('delete', app($dataType->model_name))
            @if($usesSoftDeletes)
                <input type="checkbox" @if ($showSoftDeleted) checked @endif id="show_soft_deletes" data-toggle="toggle" data-on="{{ __('voyager::bread.soft_deletes_off') }}" data-off="{{ __('voyager::bread.soft_deletes_on') }}">
            @endif
        @endcan
        @foreach($actions as $action)
            @if (method_exists($action, 'massAction'))
                @include('voyager::bread.partials.actions', ['action' => $action, 'data' => null])
            @endif
        @endforeach
        @include('voyager::multilingual.language-selector')
    </div>
@stop

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Business Architecture</title>
  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="content-wrapper">
    <!-- Architecture Vision Carousel -->
    
      <div class="col-md-15 grid-margin">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card position-relative">
            <div class="card-body">
              <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2"
                data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                        <div class="ml-xl-4 mt-3">
                          <p class="card-title">Architecture Vision</p>
                          <ul class="Vision">
                            <button type="button" class="btn btn-primary" style="margin-right: 10px;">Architecture Principle</button>
                            <button type="button" class="btn btn-primary" style="margin-right: 10px;">Architecture Goals</button>
                            <button type="button" class="btn btn-primary" style="margin-right: 10px;">Vision, Mission and Coorporate Strategy</button>
                            <button type="button" class="btn btn-primary" style="margin-right: 10px;">Value Chain Diagram</button>
                            <button type="button" class="btn btn-primary" style="margin-right: 10px;">Bussines Model Canvas</button>
                            <button type="button" class="btn btn-primary" style="margin-right: 10px;">Organization Decomposition Diagram</button>
                            <button type="button" class="btn btn-primary" style="margin-right: 10px;">Solution Concept Diagram</button>
                          </ul>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Business and Other Architectures -->
    <div class="row justify-content-center">
      <!-- Business Architecture -->
      <div class="col-md-4 grid-margin">
        <div class="card">
          <div class="card-body py-4"> <!-- Added py-4 for vertical padding -->
            <h5 class="card-title">Business Architecture</h5>
            <div class="d-flex flex-column justify-content-center align-items-center">
              <div class="d-flex mb-2">
                <button type="button" class="btn btn-primary flex-fill px-1 mr-2">Business Principle</button>
                <button type="button" class="btn btn-primary flex-fill px-1">Risk</button>
              </div>
              <div class="d-flex mb-2">
                <button type="button" class="btn btn-primary flex-fill px-1 mr-2">Key Performance Indicator</button>
                <button type="button" class="btn btn-primary flex-fill px-1">Organizational Actor Catalog</button>
              </div>
              <div class="d-flex mb-2">
                <button type="button" class="btn btn-primary flex-fill px-1 mr-2">Functional Decomposition Diagram</button>
                <button type="button" class="btn btn-primary flex-fill px-1">Business Process</button>
              </div>
              <div class="d-flex mb-2">
                <button type="button" class="btn btn-primary flex-fill px-1 mr-2">Corporate Governance</button>
                <button type="button" class="btn btn-primary flex-fill px-1">Business Process-Matrix</button>
              </div>
              <div class="d-flex mb-2">
                <button type="button" class="btn btn-primary flex-fill px-1 mr-2">Business Process-KPI Matrix</button>
                <button type="button" class="btn btn-primary flex-fill px-1">Business Process-Risk Matrix</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Application Architecture -->
      <div class="col-md-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Information System Architecture</p>
            <div class="d-flex flex-column justify-content-center align-items-center">
              <div class="d-flex mb-2">
                <button type="button" class="btn btn-primary flex-fill px-1 mr-2">Application Principle</button>
                <button type="button" class="btn btn-primary flex-fill px-1">Application Portofolio Catalog</button>
              </div>
              <div class="d-flex mb-2">
                <button type="button" class="btn btn-primary flex-fill px-1 mr-2">Application User and Location Diagram</button>
                <button type="button" class="btn btn-primary flex-fill px-1">Application Use Case Diagram</button>
              </div>
              <div class="d-flex mb-2">
                <button type="button" class="btn btn-primary flex-fill px-1 mr-2">Application-Classification Matrix</button>
                <button type="button" class="btn btn-primary flex-fill px-1">Application Data Matrix</button>
              </div>
              <div class="d-flex mb">
                <button type="button" class="btn btn-primary px-1 mr-2">Application-Classification Matrix</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Another Application Architecture -->
      <div class="col-md-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Technology Architecture</p>
            <div class="d-flex flex-column justify-content-center align-items-center">
              <div class="d-flex mb-2">
                <button type="button" class="btn btn-primary flex-fill px-1 mr-2">Technology Principle</button>
                <button type="button" class="btn btn-primary flex-fill px-1">Technology Standard Catalog</button>
              </div>
              <div class="d-flex mb-2">
                <button type="button" class="btn btn-primary flex-fill px-1 mr-2">Network Communication Diagram</button>
                <button type="button" class="btn btn-primary flex-fill px-1">Environtment and Location Diagram</button>
              </div>
              <div class="d-flex mb">
                <button type="button" class="btn btn-primary px-1 mr-2">Technology-Application Matrix</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</body>

</html>


@endsection