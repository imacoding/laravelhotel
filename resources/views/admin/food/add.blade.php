@extends('layouts.admin')
@section('style')
    @parent
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Add Food to Menu</h4>
                        </div>
                        <div class="content">
                           <form action="{{ url('admin/food') }}" method="POST" id="food-add-form" enctype="multipart/form-data">
    @csrf



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Food Name<star>*</star></label>
                                        <input type="text" name="name" class="form-control border-input"
                                               placeholder="Ex: Royal Suite" value="{{ old('name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Type<star>*</star></label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="Appetizer"
                                                    @if (old('type') == 'Appetizer') selected="selected" @endif>Appetizer
                                            </option>
                                            <option value="Soup"
                                                    @if (old('type') == 'Soup') selected="selected" @endif>
                                                Soup
                                            </option>
                                            <option value="Salad"
                                                    @if (old('type') == 'Salad') selected="selected" @endif>
                                                Salad
                                            </option>
                                            <option value="Main Course"
                                                    @if (old('type') == 'Main Course') selected="selected" @endif>
                                                Main Course
                                            </option>
                                            <option value="Dessert"
                                                    @if (old('type') == 'Dessert') selected="selected" @endif>
                                                Dessert
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image<star>*</star></label>
                                        <input type="file" name="image" class="form-control border-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Price<star>*</star></label>
                                        <input type="text" name="price" class="form-control border-input"
                                               placeholder="Ex: 500" value="{{ old('price') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" rows="5" class="form-control border-input"
                                                  placeholder="Ex: The Royal Suite are the luxurious hotel rooms you can book.">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1"
                                                    @if (old('status') == '1') selected="selected" @endif>Active
                                            </option>
                                            <option value="0"
                                                    @if (old('status') == '0') selected="selected" @endif>
                                                Inactive
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Add Food Menu
                                </button>
                            </div>
                            <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent

    <!--  Forms Validations Plugin -->
    <script src="{{asset("backend/js/jquery.validate.min.js")}}"></script>

    <!--  Select Picker Plugin -->
    <script src="{{asset('backend/js/bootstrap-selectpicker.js')}}"></script>

    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{asset("backend/js/moment.min.js")}}"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="{{asset('/backend/js/bootstrap-datetimepicker.js')}}"></script>
    <script>
        // Init DatetimePicker
        demo.initFormExtendedDatetimepickers();
    </script>

   
@endsection

