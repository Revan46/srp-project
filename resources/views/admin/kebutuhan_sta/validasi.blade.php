@extends('layouts.app', ['activePage' => 'validasi_sta', 'titlePage' => __('Validasi Skripsi dan TA')])

@section('content')
<style>
  .content{
    min-height: 78%;
  }
</style>
  <div class="content">
    <div class="container-fluid">
      {{-- content  --}}
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush