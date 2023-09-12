<div>
    <div class="container  border border-1 p-2 rounded-2">
      <h4 class="text-center my-2">Interquartile Calculator</h4>
          <form wire:submit="calculateInterQuartile">
          <div class="row my-3"> 
              <div class="col-lg-5">
                  <label for="exampleFormControlInput1" class="form-label ms-1">Input Your Data</label>
                  <input wire:model="datas" type="text" class="form-control" id="exampleFormControlInput1" placeholder="i.e 1,3,7,8,10" required/>
              </div>

              <div class="col-lg-5">
                <label for="exampleFormControlInput2" class="form-label ms-1">Input Frequency</label>
                <input wire:model="frequency" type="text" class="form-control" id="exampleFormControlInput2" placeholder="i.e 1,3,7,8,10" required/>
            </div>

            <div class="col-lg-2 mt-3 d-flex align-items-end justify-content-center">
                <button type="submit" class="btn btn-md btn-success">calculate!</button>
              </div>
          </div>

          <p class="my-3 text-muted fs-6">* Match the frequency order of the data in example if data = 1,2,3 the frequency = 1,3,1 that means 1 has  frequency , 2 has 3 frequency and 3 has 1</p>
          
         </form>
        @if(!empty($result))
          <h5 class="my-3 ms-1">Quartiles of this data  : @foreach($result as $key => $quartile) <span class="text-primary">Q{{ $key+1 }}: {{ " " }}{{ $quartile }}</span> @endforeach</h5>
        @endif

        @if(isset($interquartile))
          <h5 class="my-3 ms-1">Interquartile of this data  : <span class="text-primary">{{ $interquartile }}</span></h5>
        @endif
    </div>

    <div class="container mt-5">
      <h2 class="text-center mb-4">Interquartile Range (IQR) for Grouped Data</h2>
      <p>Interquartile Range (IQR) can also be calculated for grouped data, where data is grouped into intervals or classes. The formula for IQR remains the same, but the calculation involves grouped frequencies.</p>
      
      <h3>IQR Formula:</h3>
      <p>IQR = Q3 - Q1</p>

      <h3>Example Calculation for Grouped Data:</h3>
      <p>Suppose we have the following grouped data representing test scores:</p>
      
    <div class="table-responsive">
      <table class="table table-bordered">
          <tr>
              <th>Score Range</th>
              <th>Frequency</th>
          </tr>
          <tr>
              <td>50-59</td>
              <td>8</td>
          </tr>
          <tr>
              <td>60-69</td>
              <td>12</td>
          </tr>
          <tr>
              <td>70-79</td>
              <td>15</td>
          </tr>
          <tr>
              <td>80-89</td>
              <td>10</td>
          </tr>
          <tr>
              <td>90-99</td>
              <td>5</td>
          </tr>
      </table>
    </div>

      <p>Step 1: Determine the cumulative frequencies for each class.</p>
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
              <th>Score Range</th>
              <th>Frequency</th>
              <th>Cumulative Frequency</th>
          </tr>
          <tr>
              <td>50-59</td>
              <td>8</td>
              <td>8</td>
          </tr>
          <tr>
              <td>60-69</td>
              <td>12</td>
              <td>20</td>
          </tr>
          <tr>
              <td>70-79</td>
              <td>15</td>
              <td>35</td>
          </tr>
          <tr>
              <td>80-89</td>
              <td>10</td>
              <td>45</td>
          </tr>
          <tr>
              <td>90-99</td>
              <td>5</td>
              <td>50</td>
          </tr>
      </table>
      </div>
      
      <p>Step 2: Calculate Q1 and Q3 using the cumulative frequencies.</p>
      <p>Q1 is the median of the first half of the data, and Q3 is the median of the second half of the data.</p>
      <p>Q1 = Lower boundary of the median class + ((N/4 - Cumulative frequency before median class) / Frequency of median class) * Class width</p>
      <p>Q3 = Lower boundary of the median class + ((3N/4 - Cumulative frequency before median class) / Frequency of median class) * Class width</p>
      <p>Step 3: Calculate IQR</p>
      <p>IQR = Q3 - Q1</p>
      
  </div>
</div>
  
  