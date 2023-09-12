<div>
    <div class="container  border border-1 p-2 rounded-2">
      <h2 class="text-center my-2">Mode Calculator</h2>
          <form wire:submit="calculateMode">
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
          <h5 class="my-3 ms-1">Mode of this data is : <span class="text-primary">{{ $result }}</span></h5>
         @endif
    </div>
  
    <div class="container mt-5">
      <h3 class="">Glimpse of Mode</h3>
      <div class="row ">
          <div class="col-lg-12">
              <p>The Mode is a measure of central tendency that represents the most frequently occurring value(s) in a dataset. It is a useful statistic for identifying the most common or popular values in a set of data. Here's a brief overview of how the mode is calculated:</p>
              <h3>Mode Calculation:</h3>
              <p>To calculate the mode, you identify the values with the highest frequencies. A dataset can have one mode (unimodal) or more than one mode (multimodal).</p>
          </div>
      </div>
      <div class="row  mt-4">
          <div class="col-lg-12">
              <h3>Example Calculation:</h3>
              <p>Consider a dataset of test scores:</p>
              <ul>
                  <li>Test Scores: 85, 90, 88, 92, 85, 78, 88, 85</li>
              </ul>
              <p>Step 1: Identify Frequencies</p>
              <ul>
                  <li>85 appears 3 times</li>
                  <li>88 appears 2 times</li>
                  <li>90 appears 1 time</li>
                  <li>92 appears 1 time</li>
                  <li>78 appears 1 time</li>
              </ul>
              <p>Step 2: Calculate the Mode</p>
              <p>Since 85 has the highest frequency (3 times), it is the mode of the dataset.</p>
              <p>So, the mode of the test scores is 85.</p>
          </div>
      </div>
  </div>
  </div>
  
  
  