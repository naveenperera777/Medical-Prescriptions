@extends('layouts.app')
 @section('title')
Generate Report
 @endsection
 @section('content')
<div><center><h3>Medical Prescription Form</h3></center></div>
 <div class="container">
 <div class="jumbotron">
     <div class="row">
         <div class="col-md-8 offset-2">
             {{-- <form method="post" action="{{route('get-medical-prescription')}}"> --}}
                 {{-- {{dd($prescription->)}} --}}
                @csrf
                 <div class="row">
                     <div class="col-6">
                         <div class="form-group">
                             <label for="fname"><strong>First Name</strong></label>
                         <input type="text" class="form-control" id="fname" name="fname" disabled value="{{$prescription->first_name}}">
                         </div>
                     </div>

                     <div class="col-6">
                         <div class="form-group">
                             <label for="degree"><strong>Last Name</strong></label>
                             <input type="text" class="form-control" id="lname" name="lname"  disabled value="{{$prescription->last_name}}">

                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-5">
                         <div class="form-group">
                             <label for="degree"><strong>Age</strong></label>
                             <input type="text" class="form-control" id="age" name="age" disabled value="{{$prescription->age}}">

                         </div>
                     </div>

                     <div class="col-4">
                         <div class="form-group">
                             <label for="course_id"><strong>Gender</strong></label>
                             <input type="text" class="form-control" id="gender" name="gender"  disabled value="{{$prescription->gender}}">
                         </div>
                     </div>

                     {{-- <div class="col-4">
                         <label for="name"><strong>Semester</strong></label>
                         <input type="text" class="form-control" id="registration" name="registration">
                     </div> --}}




                 </div>
                 <div class="row">


                     {{-- <div class="col-4">
                         <div class="form-group">
                             <label for="course_id"><strong>Course ID</strong></label>
                             <input type="text" class="form-control" id="course_id" name="course_id">
                         </div>
                     </div>

                     <div class="col-4">
                         <label for="name"><strong>Registration Number</strong></label>
                         <input type="text" class="form-control" id="registration" name="registration">
                     </div> --}}



                     <div class="col-12">
                         <div class="form-group">
                             <label for="causes"><strong>Diagnosis</strong></label>
                             <textarea type="text" class="form-control" id="diagnosis" name="diagnosis"> {{$prescription->diagnosis}}</textarea>

                         </div>
                     </div>

                     <div class="col-12">
                         <div class="form-group">
                             <label for="remarks"><strong>Remarks [Optional]</strong></label>
                             <textarea type="text" class="form-control" id="remarks" name="remarks"> {{$prescription->remarks}}</textarea>

                         </div>
                     </div>

                 </div>

                 <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="degree"><strong>Generic Name</strong></label>
                                <select class="form-control" id="generic" name="generic">
                                        <option>Choose</option>
                                        {{-- @foreach($courses as $course) --}}
                                            <option value=""></option>
                                        {{-- @endforeach --}}
                                    </select>
                            </div>
                        </div>                     
   
                        <div class="col-3">
                            <div class="form-group">
                                <label for="course_id"><strong>Prefered Brand</strong></label>
                                <select class="form-control" id="brand" name="brand">
                                        <option>Choose</option>
                                        {{-- @foreach($courses as $course) --}}
                                            <option value=""></option>
                                        {{-- @endforeach --}}
                                    </select>
                            </div>
                        </div>
   
                         <div class="col-2">
                            <label for="name"><strong>Quantity</strong></label>
                            <input type="text" class="form-control" id="qty" name="qty">
                        </div> 
                        <div class="col-2">
                                <label for="name"><strong>Mg</strong></label>
                                <input type="text" class="form-control" id="mg" name="mg">
                            </div> 
                            <div class="col-2">
                                    <div class="form-group">
                                        <label for="Method"><strong>Method</strong></label>
                                        <select class="form-control" id="method" name="method">
                                                <option>Choose</option>
                                                {{-- @foreach($courses as $course) --}}
                                                    <option value=""></option>
                                                {{-- @endforeach --}}
                                            </select>
                                    </div>
                                </div>  
                       </div>

                       <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="degree"><strong>Generic Name</strong></label>
                                    <select class="form-control" id="generic" name="generic">
                                            <option>Choose</option>
                                            {{-- @foreach($courses as $course) --}}
                                                <option value=""></option>
                                            {{-- @endforeach --}}
                                        </select>
                                </div>
                            </div>                     
       
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="course_id"><strong>Prefered Brand</strong></label>
                                    <select class="form-control" id="brand" name="brand">
                                            <option>Choose</option>
                                            {{-- @foreach($courses as $course) --}}
                                                <option value=""></option>
                                            {{-- @endforeach --}}
                                        </select>
                                </div>
                            </div>
       
                             <div class="col-2">
                                <label for="name"><strong>Quantity</strong></label>
                                <input type="text" class="form-control" id="qty" name="qty">
                            </div> 
                            <div class="col-2">
                                    <label for="name"><strong>Mg</strong></label>
                                    <input type="text" class="form-control" id="mg" name="mg">
                                </div> 
                                <div class="col-2">
                                        <div class="form-group">
                                            <label for="Method"><strong>Method</strong></label>
                                            <select class="form-control" id="method" name="method">
                                                    <option>Choose</option>
                                                    {{-- @foreach($courses as $course) --}}
                                                        <option value=""></option>
                                                    {{-- @endforeach --}}
                                                </select>
                                        </div>
                                    </div>  
                           </div>
                           <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="degree"><strong>Generic Name</strong></label>
                                        <select class="form-control" id="generic" name="generic">
                                                <option>Choose</option>
                                                {{-- @foreach($courses as $course) --}}
                                                    <option value=""></option>
                                                {{-- @endforeach --}}
                                            </select>
                                    </div>
                                </div>                     
           
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="course_id"><strong>Prefered Brand</strong></label>
                                        <select class="form-control" id="brand" name="brand">
                                                <option>Choose</option>
                                                {{-- @foreach($courses as $course) --}}
                                                    <option value=""></option>
                                                {{-- @endforeach --}}
                                            </select>
                                    </div>
                                </div>
           
                                 <div class="col-2">
                                    <label for="name"><strong>Quantity</strong></label>
                                    <input type="text" class="form-control" id="qty" name="qty">
                                </div> 
                                <div class="col-2">
                                        <label for="name"><strong>Mg</strong></label>
                                        <input type="text" class="form-control" id="mg" name="mg">
                                    </div> 
                                    <div class="col-2">
                                            <div class="form-group">
                                                <label for="Method"><strong>Method</strong></label>
                                                <select class="form-control" id="method" name="method">
                                                        <option>Choose</option>
                                                        {{-- @foreach($courses as $course) --}}
                                                            <option value=""></option>
                                                        {{-- @endforeach --}}
                                                    </select>
                                            </div>
                                        </div>  
                               </div>

             <a href=""><button class="btn btn-primary">Generate PDF</button></a>
             
             </form>
         </div>
     </div>
 </div>
</div>

@endsection