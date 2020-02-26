@extends('main-layout')
@section('title', 'Checkbox')
@section('content')
<div class= "row mt-5 mb-5">
    <div class= "col-md-6 offset-md-3">
        <div class= "checkbox-simple check-primary">
            <input type="checkbox" id= "checkbox1" style="display: none;">
            <label for="checkbox1">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
            </label>
            <p class= "d-inline-block">Checkbox Primary</p>
        </div>
        <div class= "checkbox-simple check-success">
            <input type="checkbox" id= "checkbox2" style="display: none;">
            <label for="checkbox2">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
            </label>
            <p class= "d-inline-block">Checkbox Success</p>
        </div>
        <div class= "checkbox-simple check-danger">
            <input type="checkbox" id= "checkbox3" style="display: none;">
            <label for="checkbox3">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
            </label>
            <p class= "d-inline-block">Checkbox Danger</p>
        </div>
        <div class= "checkbox-simple check-warning">
            <input type="checkbox" id= "checkbox4" style="display: none;">
            <label for="checkbox4">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
            </label>
            <p class= "d-inline-block">Checkbox Warning</p>
        </div>
        <div class= "checkbox-simple check-info">
            <input type="checkbox" id= "checkbox5" style="display: none;">
            <label for="checkbox5">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
            </label>
            <p class= "d-inline-block">Checkbox Info</p>
        </div>
        <div class= "checkbox-simple check-light">
            <input type="checkbox" id= "checkbox6" style="display: none;">
            <label for="checkbox6">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
            </label>
            <p class= "d-inline-block">Checkbox Light</p>
        </div>
        <div class= "checkbox-simple check-dark">
            <input type="checkbox" id= "checkbox7" style="display: none;">
            <label for="checkbox7">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
            </label>
            <p class= "d-inline-block">Checkbox Dark</p>
        </div>
    </div>
</div>
<div class= "row mt-5 mb-5">
    <div class= "col-md-6 offset-md-3">
        <div class= "checkbox-square check-primary">
            <input type= "checkbox" id= "checkbox8">
            <label for= "checkbox8">
                <i class= "fas fa-check align-middle"></i>
            </label>
            <p class= "d-inline-block">Checkbox Primary Square</p>
        </div>
        <div class= "checkbox-square check-success">
            <input type= "checkbox" id= "checkbox9">
            <label for= "checkbox9">
                <i class= "fas fa-check align-middle"></i>
            </label>
            <p class= "d-inline-block">Checkbox Primary Square</p>
        </div>
        <div class= "checkbox-square check-danger">
            <input type= "checkbox" id= "checkbox10">
            <label for= "checkbox10">
                <i class= "fas fa-check align-middle"></i>
            </label>
            <p class= "d-inline-block">Checkbox Primary Square</p>
        </div>
        <div class= "checkbox-square check-warning">
            <input type= "checkbox" id= "checkbox11">
            <label for= "checkbox11">
                <i class= "fas fa-check align-middle"></i>
            </label>
            <p class= "d-inline-block">Checkbox Primary Square</p>
        </div>
        <div class= "checkbox-square check-info">
            <input type= "checkbox" id= "checkbox12">
            <label for= "checkbox12">
                <i class= "fas fa-check align-middle"></i>
            </label>
            <p class= "d-inline-block">Checkbox Primary Square</p>
        </div>
        <div class= "checkbox-square check-light">
            <input type= "checkbox" id= "checkbox13">
            <label for= "checkbox13">
                <i class= "fas fa-check align-middle"></i>
            </label>
            <p class= "d-inline-block">Checkbox Primary Square</p>
        </div>
        <div class= "checkbox-square check-dark">
            <input type= "checkbox" id= "checkbox14">
            <label for= "checkbox14">
                <i class= "fas fa-check align-middle"></i>
            </label>
            <p class= "d-inline-block">Checkbox Primary Square</p>
        </div>
    </div>
</div>
<div class= "row mt-5 mb-5">
    <div class= "col-md-6 offset-md-3">
        <div class= "checkbox-rounded check-primary">
            <input type= "checkbox" id= "checkbox15">
            <label for="checkbox15">
                <span><!-- This span is needed to create the "checkbox" element --></span>Checkbox
            </label>
        </div>
        <div class= "checkbox-rounded check-success">
            <input type= "checkbox" id= "checkbox16">
            <label for="checkbox16">
                <span><!-- This span is needed to create the "checkbox" element --></span>Checkbox
            </label>
        </div>
        <div class= "checkbox-rounded check-danger">
            <input type= "checkbox" id= "checkbox17">
            <label for="checkbox17">
                <span><!-- This span is needed to create the "checkbox" element --></span>Checkbox
            </label>
        </div>
        <div class= "checkbox-rounded check-warning">
            <input type= "checkbox" id= "checkbox18">
            <label for="checkbox18">
                <span><!-- This span is needed to create the "checkbox" element --></span>Checkbox
            </label>
        </div>
        <div class= "checkbox-rounded check-info">
            <input type= "checkbox" id= "checkbox19">
            <label for="checkbox19">
                <span><!-- This span is needed to create the "checkbox" element --></span>Checkbox
            </label>
        </div>
        <div class= "checkbox-rounded check-light">
            <input type= "checkbox" id= "checkbox20">
            <label for="checkbox20">
                <span><!-- This span is needed to create the "checkbox" element --></span>Checkbox
            </label>
        </div>
        <div class= "checkbox-rounded check-dark">
            <input type= "checkbox" id= "checkbox21">
            <label for="checkbox21">
                <span><!-- This span is needed to create the "checkbox" element --></span>Checkbox
            </label>
        </div>
    </div>
</div>
@endsection