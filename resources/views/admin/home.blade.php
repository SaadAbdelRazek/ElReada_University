@extends('admin.master.app')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{Auth::user()->name}}'s Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">صفحة التحكم</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Primary Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Warning Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Success Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Danger Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Bar Chart Example
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
{{--                <div class="card mb-4">--}}
{{--                    <div class="card-header">--}}
{{--                        <i class="fas fa-table me-1"></i>--}}
{{--                        DataTable Example--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <table id="datatablesSimple">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>Name</th>--}}
{{--                                <th>Position</th>--}}
{{--                                <th>Office</th>--}}
{{--                                <th>Age</th>--}}
{{--                                <th>Start date</th>--}}
{{--                                <th>Salary</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tfoot>--}}
{{--                            <tr>--}}
{{--                                <th>Name</th>--}}
{{--                                <th>Position</th>--}}
{{--                                <th>Office</th>--}}
{{--                                <th>Age</th>--}}
{{--                                <th>Start date</th>--}}
{{--                                <th>Salary</th>--}}
{{--                            </tr>--}}
{{--                            </tfoot>--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>Tiger Nixon</td>--}}
{{--                                <td>System Architect</td>--}}
{{--                                <td>Edinburgh</td>--}}
{{--                                <td>61</td>--}}
{{--                                <td>2011/04/25</td>--}}
{{--                                <td>$320,800</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Garrett Winters</td>--}}
{{--                                <td>Accountant</td>--}}
{{--                                <td>Tokyo</td>--}}
{{--                                <td>63</td>--}}
{{--                                <td>2011/07/25</td>--}}
{{--                                <td>$170,750</td>--}}
{{--                            </tr>--}}
{{--
{{--
{{--
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="input-field" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="input-field" required>
                        </div>
                        <div class="form-group">
                            <label for="file">Upload File</label>
                            <input type="file" id="file" name="file" class="file-field">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select id="category" name="category" class="select-field">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="textarea-field" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" id="date" name="date" class="date-field">
                        </div>
                        <button type="submit" class="btn-submit">Submit</button>
                        <button type="reset" class="btn-reset">Reset</button>
                        <button type="button" class="btn-delete">Delete</button>
                        <button type="button" class="btn-update">Update</button>
                    </form>
                </div>
            </div>
        </main>
@endsection
