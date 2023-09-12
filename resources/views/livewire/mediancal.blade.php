<div>
    <div class="container  border border-1 p-2 rounded-2">
      <h2 class="text-center my-2">Median Calculator</h2>
          <form wire:submit="calculateMedian">
          <div class="row my-3"> 
              <div class="col-lg-10">
                  <label for="exampleFormControlInput1" class="form-label ms-1">Input Your Data</label>
                  <input wire:model="datas" type="text" class="form-control" id="exampleFormControlInput1" placeholder="i.e 1,3,7,8,10" required/>
              </div>

               <div class="col-lg-2 mt-3 d-flex align-items-end justify-content-center">
                <button type="submit" class="btn btn-md btn-success">calculate!</button>
              </div>
          </div>
          
         </form>
         @if ($result !== null && $result !== '')
          <h5 class="my-3 ms-1">Median of this data is : <span class="text-primary">{{ $result }}</span></h5>
         @endif
    </div>
  
    <div class="container mt-5">
      <h3 class="">Glimpse of Median</h3>
      <div class="row">
          <div class="col-lg-12">
              <p>The Median is a measure of central tendency that represents the middle value of a dataset when it is ordered. It is a useful statistic to understand the center of a dataset and is less affected by extreme values compared to the mean. Here's a brief overview of how the median is calculated:</p>
              <h3>Median Calculation:</h3>
              <p>If the dataset has an odd number of values, the median is the middle value when the data is sorted. If the dataset has an even number of values, the median is the average of the two middle values when the data is sorted.</p>
          </div>
      </div>
      <div class="row mt-4">
          <div class="col-lg-12">
              <h3>Example Calculation:</h3>
              <p>For instance, consider a dataset of exam scores:</p>
              <ul>
                  <li>Exam Scores: 85, 90, 88, 92, 78</li>
              </ul>
              <p>Step 1: Sort the Data</p>
              <p>Sorted Scores: 78, 85, 88, 90, 92</p>
              <p>Step 2: Calculate the Median</p>
              <p>Since there is an odd number of values (5), the median is the middle value, which is 88.</p>
              <p>So, the median of the exam scores is 88.</p>
          </div>
      </div>
  </div>
  </div>
  
  
  