@push('metas')
  <title>Admin User | Kafa-ka.com</title>
@endpush

@extends('layouts.admin.app')

@section('content')
  <!-- BEGIN Header Holder -->
  <div class="header-holder header-holder-desktop">
    <div class="header-container container-fluid g-4">
      <h4 class="header-title">List User</h4>
      <i class="header-divider"></i>
      <div class="header-wrap header-wrap-block justify-content-start">
        <!-- BEGIN Breadcrumb -->
        <div class="breadcrumb breadcrumb-transparent mb-0">
          <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">
            <div class="breadcrumb-icon">
              <i data-feather="home"></i>
            </div>
            <span class="breadcrumb-text">Dashboard</span>
          </a>
          <a href="{{ route('admin.user.list') }}" class="breadcrumb-item">
            <span class="breadcrumb-text">User</span>
          </a>
        </div>
        <!-- END Breadcrumb -->
      </div>
      <div class="header-wrap">
        <button class="btn btn-label-info btn-icon" id="fullscreen-trigger" data-bs-toggle="tooltip"
          title="Toggle fullscreen" data-bs-placement="left">
          <i class="fa fa-expand fullscreen-icon-expand"></i>
          <i class="fa fa-compress fullscreen-icon-compress"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- END Header Holder -->

  <!-- BEGIN Header Holder -->
  <div class="header-holder header-holder-mobile">
    <div class="header-container container-fluid g-4">
      <div class="header-wrap header-wrap-block justify-content-start w-100">
        <!-- BEGIN Breadcrumb -->
        <div class="breadcrumb breadcrumb-transparent mb-0">
          <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">
            <div class="breadcrumb-icon">
              <i data-feather="home"></i>
            </div>
            <span class="breadcrumb-text">Dashboard</span>
          </a>
          <a href="{{ route('admin.user.list') }}" class="breadcrumb-item">
            <span class="breadcrumb-text">User</span>
          </a>
        </div>
        <!-- END Breadcrumb -->
      </div>
    </div>
  </div>
  <!-- END Header Holder -->

  <div class="content">
    <div class="container-fluid g-4">
      <div class="row">

        <div class="col-12">
          <!-- BEGIN Portlet -->
          <div class="portlet">
            <div class="portlet-header portlet-header-bordered">
              <h3 class="portlet-title">List User</h3>
              <button class="btn btn-success">
                Tambah User
              </button>
            </div>
            <div class="portlet-body">
              {{-- <p>It is possible to easily customize the options shown in the length menu (by default at the top left of
                the table) using the <code>lengthMenu</code> Initialisation option, this parameter can take 1D or 2D
                array.</p>
              <hr> --}}
              <!-- BEGIN Datatable -->
              <table id="datatable" class="table-bordered table-striped table-hover table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Card ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>629047</td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>629547</td>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>129547</td>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>129567</td>
                    <td>Cedric Kelly</td>
                    <td>Senior Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>429567</td>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>829567</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>819067</td>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>019067</td>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>815667</td>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>815067</td>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>815227</td>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>815927</td>
                    <td>Quinn Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>816927</td>
                    <td>Charde Marshall</td>
                    <td>Regional Director</td>
                    <td>San Francisco</td>
                    <td>36</td>
                    <td>2008/10/16</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>116927</td>
                    <td>Haley Kennedy</td>
                    <td>Senior Marketing Designer</td>
                    <td>London</td>
                    <td>43</td>
                    <td>2012/12/18</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>112907</td>
                    <td>Tatyana Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>19</td>
                    <td>2010/03/17</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>218907</td>
                    <td>Michael Silva</td>
                    <td>Marketing Designer</td>
                    <td>London</td>
                    <td>66</td>
                    <td>2012/11/27</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>238907</td>
                    <td>Paul Byrd</td>
                    <td>Chief Financial Officer (CFO)</td>
                    <td>New York</td>
                    <td>64</td>
                    <td>2010/06/09</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>138997</td>
                    <td>Gloria Little</td>
                    <td>Systems Administrator</td>
                    <td>New York</td>
                    <td>59</td>
                    <td>2009/04/10</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>930997</td>
                    <td>Bradley Greer</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>41</td>
                    <td>2012/10/13</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>230987</td>
                    <td>Dai Rios</td>
                    <td>Personnel Lead</td>
                    <td>Edinburgh</td>
                    <td>35</td>
                    <td>2012/09/26</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>550987</td>
                    <td>Jenette Caldwell</td>
                    <td>Development Lead</td>
                    <td>New York</td>
                    <td>30</td>
                    <td>2011/09/03</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>510987</td>
                    <td>Yuri Berry</td>
                    <td>Chief Marketing Officer (CMO)</td>
                    <td>New York</td>
                    <td>40</td>
                    <td>2009/06/25</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>210987</td>
                    <td>Caesar Vance</td>
                    <td>Pre-Sales Support</td>
                    <td>New York</td>
                    <td>21</td>
                    <td>2011/12/12</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>24</td>
                    <td>714987</td>
                    <td>Doris Wilder</td>
                    <td>Sales Assistant</td>
                    <td>Sydney</td>
                    <td>23</td>
                    <td>2010/09/20</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td>915987</td>
                    <td>Angelica Ramos</td>
                    <td>Chief Executive Officer (CEO)</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2009/10/09</td>
  
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>26</td>
                    <td>015987</td>
                    <td>Gavin Joyce</td>
                    <td>Developer</td>
                    <td>Edinburgh</td>
                    <td>42</td>
                    <td>2010/12/22</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td>015347</td>
                    <td>Jennifer Chang</td>
                    <td>Regional Director</td>
                    <td>Singapore</td>
                    <td>28</td>
                    <td>2010/11/14</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>28</td>
                    <td>715347</td>
                    <td>Brenden Wagner</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>28</td>
                    <td>2011/06/07</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>29</td>
                    <td>956347</td>
                    <td>Fiona Green</td>
                    <td>Chief Operating Officer (COO)</td>
                    <td>San Francisco</td>
                    <td>48</td>
                    <td>2010/03/11</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>30</td>
                    <td>236347</td>
                    <td>Shou Itou</td>
                    <td>Regional Marketing</td>
                    <td>Tokyo</td>
                    <td>20</td>
                    <td>2011/08/14</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>31</td>
                    <td>289347</td>
                    <td>Michelle House</td>
                    <td>Integration Specialist</td>
                    <td>Sydney</td>
                    <td>37</td>
                    <td>2011/06/02</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>32</td>
                    <td>289325</td>
                    <td>Suki Burks</td>
                    <td>Developer</td>
                    <td>London</td>
                    <td>53</td>
                    <td>2009/10/22</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>33</td>
                    <td>989321</td>
                    <td>Prescott Bartlett</td>
                    <td>Technical Author</td>
                    <td>London</td>
                    <td>27</td>
                    <td>2011/05/07</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>34</td>
                    <td>189329</td>
                    <td>Gavin Cortez</td>
                    <td>Team Leader</td>
                    <td>San Francisco</td>
                    <td>22</td>
                    <td>2008/10/26</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>35</td>
                    <td>109319</td>
                    <td>Martena Mccray</td>
                    <td>Post-Sales support</td>
                    <td>Edinburgh</td>
                    <td>46</td>
                    <td>2011/03/09</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>36</td>
                    <td>079319</td>
                    <td>Unity Butler</td>
                    <td>Marketing Designer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/12/09</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>37</td>
                    <td>076719</td>
                    <td>Howard Hatfield</td>
                    <td>Office Manager</td>
                    <td>San Francisco</td>
                    <td>51</td>
                    <td>2008/12/16</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>38</td>
                    <td>976717</td>
                    <td>Hope Fuentes</td>
                    <td>Secretary</td>
                    <td>San Francisco</td>
                    <td>41</td>
                    <td>2010/02/12</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>39</td>
                    <td>576710</td>
                    <td>Vivian Harrell</td>
                    <td>Financial Controller</td>
                    <td>San Francisco</td>
                    <td>62</td>
                    <td>2009/02/14</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>40</td>
                    <td>976710</td>
                    <td>Timothy Mooney</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>37</td>
                    <td>2008/12/11</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>41</td>
                    <td>776711</td>
                    <td>Jackson Bradshaw</td>
                    <td>Director</td>
                    <td>New York</td>
                    <td>65</td>
                    <td>2008/09/26</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>42</td>
                    <td>976011</td>
                    <td>Olivia Liang</td>
                    <td>Support Engineer</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2011/02/03</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>43</td>
                    <td>375018</td>
                    <td>Bruno Nash</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>38</td>
                    <td>2011/05/03</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>44</td>
                    <td>274011</td>
                    <td>Sakura Yamamoto</td>
                    <td>Support Engineer</td>
                    <td>Tokyo</td>
                    <td>37</td>
                    <td>2009/08/19</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>45</td>
                    <td>674061</td>
                    <td>Thor Walton</td>
                    <td>Developer</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2013/08/11</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>46</td>
                    <td>874068</td>
                    <td>Finn Camacho</td>
                    <td>Support Engineer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/07/07</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>47</td>
                    <td>854098</td>
                    <td>Serge Baldwin</td>
                    <td>Data Coordinator</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2012/04/09</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>48</td>
                    <td>854012</td>
                    <td>Zenaida Frank</td>
                    <td>Software Engineer</td>
                    <td>New York</td>
                    <td>63</td>
                    <td>2010/01/04</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>49</td>
                    <td>124089</td>
                    <td>Zorita Serrano</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>56</td>
                    <td>2012/06/01</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>50</td>
                    <td>924089</td>
                    <td>Jennifer Acosta</td>
                    <td>Junior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>43</td>
                    <td>2013/02/01</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>51</td>
                    <td>123099</td>
                    <td>Cara Stevens</td>
                    <td>Sales Assistant</td>
                    <td>New York</td>
                    <td>46</td>
                    <td>2011/12/06</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>52</td>
                    <td>723399</td>
                    <td>Hermione Butler</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2011/03/21</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>53</td>
                    <td>323399</td>
                    <td>Lael Greer</td>
                    <td>Systems Administrator</td>
                    <td>London</td>
                    <td>21</td>
                    <td>2009/02/27</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>54</td>
                    <td>783129</td>
                    <td>Jonas Alexander</td>
                    <td>Developer</td>
                    <td>San Francisco</td>
                    <td>30</td>
                    <td>2010/07/14</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>55</td>
                    <td>756129</td>
                    <td>Shad Decker</td>
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>51</td>
                    <td>2008/11/13</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>56</td>
                    <td>056229</td>
                    <td>Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td>Singapore</td>
                    <td>29</td>
                    <td>2011/06/27</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>57</td>
                    <td>996229</td>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>2011/01/25</td>
                    <td class="text-nowrap">
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-primary btn-icon mr-1">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.user.detail', ['id' => 1]) }}" class="btn btn-label-secondary btn-icon mr-1">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-label-danger btn-icon">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- END Datatable -->
            </div>
          </div>
          <!-- END Portlet -->
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
  <script>
    "use strict";
    $(function() {
      $("#datatable").DataTable({
        responsive: true,
        pageLength: 10,
        lengthMenu: [
          [5, 10, 25, 50, -1],
          [5, 10, 25, 50, "All"]
        ],
      })
    });
  </script>
@endpush
