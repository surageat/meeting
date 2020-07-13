@extends('layouts.home')
@section('header')
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">เชิญประชุม</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">เชิญประชุม</li>
                 </ol>
        </div>
    </div>
    @endsection

    @section('content')
    <div>
    
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td></td>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td></td>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td></td>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td></td>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td></td>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td></td>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>$106,450</td>
            </tr>
              
    </table>
    </div>
    // checkbox


<script>
$(document).ready(function() {
    $('#example').DataTable( {
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
    } );
} );

{
    targets: 0,
    data: null,
    defaultContent: '',
    orderable: false,
    className: 'select-checkbox'
}
</script>
<link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{asset('css/select.dataTables.min.css')}}" rel="stylesheet">
@endsection


 

