@extends('main-layout')
@section('title', 'Toaster')
@section('content')
<div class= "row mt-3">
    <div class= "col-md-3">
        <div class="toast toast-primary" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="{{ asset('img/dog.jpg') }}" class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
        <div class="toast toast-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="{{ asset('img/dog.jpg') }}" class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
        <div class="toast toast-danger" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="{{ asset('img/dog.jpg') }}" class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
        <div class="toast toast-warning" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="{{ asset('img/dog.jpg') }}" class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
        <div class="toast toast-info" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="{{ asset('img/dog.jpg') }}" class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
        <div class="toast toast-light" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="{{ asset('img/dog.jpg') }}" class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
        <div class="toast toast-dark" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="{{ asset('img/dog.jpg') }}" class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>
    <div class= "col-md-3">
        <div class="toast toast-custom-danger-solid" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-exclamation-triangle"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2 text-white">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast toast-custom-success-solid" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-check"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2 text-white">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast toast-custom-info-solid" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-info-circle"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2 text-white">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast toast-custom-warning-solid" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-radiation"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2 text-white">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast toast-custom-light-solid" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-check"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2 text-muted">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast toast-custom-dark-solid" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-check"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2 text-white">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast toast-custom-primary-solid" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-check"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2 text-white">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class= "col-md-3">
        <div class="toast toast-custom-danger-outline" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-exclamation-triangle"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast toast-custom-success-outline" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-check"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast toast-custom-info-outline" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-info-circle"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast toast-custom-warning-outline" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-radiation"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast toast-custom-light-outline" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-check"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast toast-custom-dark-outline" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-check"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast toast-custom-primary-outline" role="alert" aria-live="assertive" aria-atomic="true">
            <div class= "toast-body">
                <div class= "row">
                    <div class= "col-1 pr-0 custom-icon"><i class= "fas fa-check"></i></div>
                    <div class= "col-10 pr-0">
                        <p class= "mt-2 ml-2">Sample toast message.</p>
                    </div>
                    <div class= "col-1 pl-0 mt-2">
                        <button type="button" class="close toast-button" data-dismiss="toast" aria-label="Close"><i class= "fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type= "text/javascript">
$('.toast').toast({delay: 20000}).toast('show');
</script>
@endsection 