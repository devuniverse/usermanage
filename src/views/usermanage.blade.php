@extends(Config::get('usermanage.master_file_extend'))

@section(Config::get('usermanage.yields.head'))
<style media="screen">
.unique-user:nth-child(2n+1) {
  background-color: #ccc;
}
</style>
@endsection
@section(Config::get('usermanage.yields.usermanage_content'))
<div class="usermanage-main">
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
      @if($luser->userCan('list_settings'))

        @include('usermanage::partials.listusers', ['users' => $users ])

      @else

        {{ __("You are not allowed to do that") }}

      @endif
  </div>
</div>
@endsection


@section(Config::get('usermanage.yields.footer'))
<script type="text/javascript">
  var permXUrl = "/<?php echo Config::get('usermanage.usermanage_url') ?>";

  $('.select-role').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {

    var token = $('[name="csrf-token"]').prop('content');
    var chosen= $(this).val();
    $('.perm-container').html('<div class="full-loading"><i class="fas fa-cog fa-spin"></i></div>');
    setTimeout(function(){
      $.ajax({
        url: permXUrl+'/updateusermanage',
        type: 'POST',
        crossDomain: true,
        data: { _token: token, v: chosen },
        success: function (response) {
          $('.perm-container').html(response.html);
        },
        error: function (errors) {
          alert(JSON.stringify(errors));
        }
      });
      e.stopImmediatePropagation();
    }, 1000);
    return false;
  });
</script>
@endsection
