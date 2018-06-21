                     
                     
                     
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
                                 {{-- @endforeach  --}}
                            </select>
                    </div>
                </div>  
       </div>