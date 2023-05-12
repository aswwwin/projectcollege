<option value="">Select department</option> 
 @foreach ($dept as $dept)
 <option value="{{$dept->id}}">{{$dept->dept_name}}</option>
 @endforeach