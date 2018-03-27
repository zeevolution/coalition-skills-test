@extends('index')

@section('page_title', 'Coalition Products')

@section('content')
<div class="col-sm-12 col-md-12 col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title toptrader-bg-primary">
                <a data-toggle="collapse" href="#schedules">
                    <i class="voyager-bag"></i> Products</a>
            </h2>
        </div>
        <div id="schedules" class="panel-collapse collapse in">
            <div class="panel-body">
                <form id="scheduleConfRoomForm"
                      action="{{route('products.store')}}"
                      method="POST"
                      enctype="multipart/form-data">
                    {{ method_field("POST") }}
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                            <label><h4>Product Name:</h4></label>
                            <input placeholder="Enter Product's name" type="text" tabindex="1"
                                   class="form-control" name="name" required>
                        </div>
                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                            <label><h4>Quantity in Stock:</h4></label>
                            <input placeholder="Enter product's quantity in stock" type="number" step="any" tabindex="2"
                                   class="form-control" name="quantity_in_stock" required>
                        </div>
                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                            <label><h4>Price per Item: </h4></label>
                            <input placeholder="Enter product's price" type="number" step="any" tabindex="3"
                                   class="form-control" name="price_per_item" required>
                        </div>
                        <br>
                        <div class="form-group pull-right
                                        col-sm-3 col-md-3 col-lg-3">
                            <button type="submit" title="Adicionar Horário"
                                    class="btn btn-primary pull-right">
                                <i class="voyager-plus"></i> <span class="hidden-xs hidden-sm">Add Product</span></button>
                        </div>
                    </fieldset>
                </form>
                <hr>
                @if($products)
                    <list class="col-sm-12 col-md-12 col-lg-12">
                        <div class="table-responsive ">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                <tr>
                                    <th width="20%">
                                       Product Name:
                                    </th>
                                    <th width="20%">
                                        Quantity in Stock:
                                    </th>
                                    <th width="20%">
                                        Price per Item ($)
                                    </th>
                                    <th width="20%">
                                        Created at:
                                    </th>
                                    <th width="20%">
                                        Total value number
                                    </th>
                                    <th width="10%">
                                        Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <form id="productUpdateForm"
                                              action="{{route('products.update', $product)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            {{ method_field("PUT") }}
                                            {{ csrf_field() }}
                                            <td width="20%">
                                                <input placeholder="Enter Product's name" type="text"
                                                       class="form-control" name="name" value="{{$product->name}}" required>
                                            </td>
                                            <td width="20%">
                                                <input placeholder="Enter product's quantity in stock" type="number" step="any"
                                                       class="form-control" name="quantity_in_stock" value="{{$product->quantity_in_stock}}" required>
                                            </td>
                                            <td width="20%">
                                                <input placeholder="Enter product's price" type="number" step="any"
                                                       class="form-control" name="price_per_item" value="{{$product->price_per_item}}" required>
                                            </td>
                                            <td width="20%">
                                                <h4> {{ $product->created_at->format("m/d/Y") }}</h4>
                                            </td>
                                            <td width="20%">
                                                <h4>$ {{ $product->price_per_item * $product->quantity_in_stock }}</h4>
                                            </td>
                                            <td width="10%" class="no-sort no-click" id="bread-actions-{{$product->id}}">
                                                <button type="submit" title="Update Product"
                                                    class="btn btn-info">
                                                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Update</span>
                                                </button>
                                                <a href="javascript:;" title="Delete Product" class="btn btn-sm btn-danger pull-right delete" data-id="{{$product->id}}" id="delete-{{$product->id}}">
                                                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                                </a>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td width="20%">

                                    </td>
                                    <td width="20%">

                                    </td>
                                    <td width="20%">

                                    </td>
                                    <td width="20%">

                                    </td>
                                    <td width="20%">
                                        <h4>Total: $ {{$totalProductsValue}}</h4>
                                    </td>
                                    <td width="10%" class="no-sort no-click" id="bread-actions-{{$product->id}}">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </list>
                @else
                    <h4 class="text-center">Não há horários registrados para essa sala de conferência.</h4>
                @endif
            </div>
        </div>
    </div>
</div>
@stop