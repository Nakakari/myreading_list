@extends('layouts.app')

@section('content')
    <nav class="navbar">
        <div class="container-fluid" style="max-width: 80%">
            <div class="navbar-brand mb-0 mt-3" style="font-size: 16px; font-weight: 500">
                Dream Team<span style="color: #9596a0; font-size: 14px; font-weight: 400">
                    | Team 4 | Hello, {{ Auth::user()->name }}!</span>
            </div>
            <div style="font-size: 16px; font-weight: 200">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>



        </div>
    </nav>
    <div class="heading d-flex justify-content-center">
        <div>
            <h6 class="text-center" style="color: #6d50a0">
                What have you read today?
            </h6>
            <h1 class="text-center mt-3" style="font-weight: 200">
                My Reading <span style="font-weight: 500">List</span>
            </h1>
        </div>
    </div>
    <div class="accordion" id="accordionExample">
        <div class="button d-flex justify-content-center mt-4">
            <button class="cta-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Add
            </button>
        </div>
        <div id="collapseOne" class="mybox rounded-3 accordion-collapse collapse" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <form>
                <div class="mybucket mb-3">
                    <!-- <label for="exampleInputEmail1" class="form-label">Wish</label> -->
                    <div class="d-block">
                        <legend class="mb-3" style="font-weight: 200">
                            Add your book here
                        </legend>
                        <input id="bookTitle" class="form-control mb-4" type="text" placeholder="Enter book's title" />
                        <input id="bookAuthor" class="form-control mb-4" type="text" placeholder="Enter book's author" />
                        <button onclick="save_book()" type="button" class="btn btn-outline-primary float-end mb-3 px-4">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="mybox rounded-3">
        <legend class="mb-3" style="font-weight: 200">Your Book</legend>
        <div class="lister" id="bucket-list"></div>
    </div>
@stop
@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            show_book();
        });

        function show_book() {
            $("#bucket-list").empty();
            $.ajax({
                type: "GET",
                url: "/book",
                data: {},
                success: function(response) {
                    console.log(response)
                    // let response = response["book"];
                    for (let i = 0; i < response.length; i++) {
                        let title = response[i]["book_title"];
                        let author = response[i]["book_author"];
                        let num = response[i]["id_book"];
                        let done = response[i]["status"];

                        let temp_html = "";
                        if (done === 0) {
                            temp_html = `
                <li class="list-unstyled d-flex justify-content-between">
                  <div class="">
                    <h5 style="font-size: 16px;">${title}
                      <span class="text-primary" style="font-size: 14px; font-weight: 200"
                      >(In Progress)</span  
                    </h5>
                    <p class="mt-2" style="font-size: 14px;font-weight: 200">${author}</p>
                  </div>
                  <div class="d-flex">
                    <a
                      onclick="done_book(${num})"
                      type="button"
                      class="link-unstyled my-auto pb-3 text-success"
                      style="font-size: 14px;"
                    >
                      Done
                    </a>
                    <a
                      onclick="delete_book(${num})"
                      type="button"
                      class="link-unstyled my-auto pb-3 text-danger ms-3"
                      style="font-size: 14px;"
                    >
                      Delete
                    </a>
                  </div>
                </li>`;
                        } else {
                            temp_html = `
                <li class="list-unstyled d-flex justify-content-between">
                  <div class="">
                    <h5 style="font-size: 16px;">${title}						
                      <span class="text-success" style="font-size: 14px; font-weight: 200"
                        >(Completed)</span
                    ></h5>
                    <p class="" style="font-size: 14px;font-weight: 200">${author}</p>
                  </div>
                  <div class="d-flex">
                    <a
                      onclick="undone_book(${num})"
                      type="button"
                      class="link-unstyled my-auto pb-3 text-primary"
                      style="font-size: 14px;"
                    >
                      Mark as unread
                    </a>
                    <a
                      onclick="delete_book(${num})"
                      type="button"
                      class="link-unstyled my-auto pb-3 text-danger ms-3"
                      style="font-size: 14px;"
                    >
                      Delete
                    </a>
                  </div>
                </li>
                `;
                        }
                        $("#bucket-list").append(temp_html);
                    }
                },
            });
        }

        function save_book() {
            let bookTitle = $("#bookTitle").val();
            let bookAuthor = $("#bookAuthor").val();
            $.ajax({
                type: "POST",
                url: "/book",
                data: {
                    title_give: bookTitle,
                    author_give: bookAuthor,
                    status: 0,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // alert(response["msg"]);
                    window.location.reload();
                },
            });
        }

        function done_book(num) {
            $.ajax({
                type: "POST",
                url: "/book/done",
                data: {
                    status: 1,
                    num_give: num,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // alert(response["msg"]);
                    window.location.reload();
                },
            });
        }

        function undone_book(num) {
            $.ajax({
                type: "POST",
                url: "/book/undone",
                data: {
                    status: 0,
                    num_give: num,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // alert(response["msg"]);
                    window.location.reload();
                },
            });
        }

        function delete_book(num) {
            $.ajax({
                type: "POST",
                url: "/delete",
                data: {
                    num_give: num,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // alert(response["msg"]);
                    window.location.reload();
                },
            });
        }
    </script>
@stop
