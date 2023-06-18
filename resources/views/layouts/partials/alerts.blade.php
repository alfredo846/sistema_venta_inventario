<!-- Alerts -->
<div class="alert-container">
    @if (session('message'))
    <div class="alert alert-mint text-bold">
        <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle text-bold"></i></button>
        <span class="text-bold">{{session("message")}} </span>
	</div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger m-0 text-center fw-bold fs-6 w-100 my-2 text-bold">{{session("error")}}</div>
    @endif
</div>
<!-- Alerts End -->