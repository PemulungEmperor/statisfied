<div>
    <div class="container  border border-1 p-2 rounded-2">
      <h2 class="text-center my-2">Standard Deviation Calculator</h2>
          <form wire:submit="calculateDeviation">
          <div class="row my-3"> 
              <div class="col-lg-5">
                  <label for="exampleFormControlInput1" class="form-label ms-1">Input Your Data</label>
                  <input wire:model="datas" type="text" class="form-control" id="exampleFormControlInput1" placeholder="i.e 1,3,7,8,10" required/>
              </div>

              <div class="col-lg-5" id="decimal">
                <label for="exampleFormControlInput2" class="form-label ms-1">Decimal Count</label>
                <input wire:model="decimal_count" type="number" class="form-control" placeholder="(optional, i.e : 1)" id="exampleFormControlInput2"/>
            </div>

            <div class="col-lg-2 mt-3 d-flex align-items-end justify-content-center">
                <button type="submit" class="btn btn-md btn-success">calculate!</button>
              </div>
          </div>
        
          
         </form>
      @if ($result !== null && $result !== '')
      <h5 class="my-3 ms-1">Standard Deviation of this data is : <span class="text-primary">{{ $result }}</span></h5>
      @endif
  
    </div>

    <div class="container mt-5">
      <h3>Glimpse of Standard Deviation</h3>
      <div class="row">
          <div class="col-lg-12">
              <p>Standard Deviation is a measure of the amount of variation or dispersion in a set of values. It quantifies the amount of spread in the data. Here's a glimpse of how standard deviation is calculated:</p>
              <h3>Standard Deviation Formula:</h3>
              <p>Standard Deviation (σ) = √[(Σ(xi - μ)²) / N]</p>
              <ul>
                  <li>σ: Standard Deviation</li>
                  <li>Σ: Summation (Sum of all values)</li>
                  <li>xi: Each value in the dataset</li>
                  <li>μ: Mean (Average) of the dataset</li>
                  <li>N: Total number of values in the dataset</li>
              </ul>
              <p>Standard Deviation helps in understanding the degree of variability or dispersion in data. A smaller standard deviation indicates that data points tend to be closer to the mean, while a larger standard deviation indicates that data points are more spread out.</p>
          </div>
      </div>

      <div class="row mt-4">
        <div class="col-lg-12">
            <h3>Example Calculation:</h3>
            <p>Suppose we have a dataset of exam scores:</p>
            <ul>
                <li>Exam Scores: 85, 90, 88, 92, 78</li>
            </ul>
            <p>Step 1: Calculate the Mean (Average)</p>
            <p>Mean (μ) = (85 + 90 + 88 + 92 + 78) / 5 = 86.6</p>
            <p>Step 2: Calculate the Squared Differences from the Mean</p>
            <ul>
                <li>(85 - 86.6)² = 2.56</li>
                <li>(90 - 86.6)² = 11.56</li>
                <li>(88 - 86.6)² = 1.96</li>
                <li>(92 - 86.6)² = 30.56</li>
                <li>(78 - 86.6)² = 74.44</li>
            </ul>
            <p>Step 3: Calculate the Sum of Squared Differences</p>
            <p>Σ(xi - μ)² = 2.56 + 11.56 + 1.96 + 30.56 + 74.44 = 121.08</p>
            <p>Step 4: Calculate the Variance (Average of Squared Differences)</p>
            <p>Variance (σ²) = 121.08 / 5 = 24.216</p>
            <p>Step 5: Calculate the Standard Deviation (Square Root of Variance)</p>
            <p>Standard Deviation (σ) ≈ √24.216 ≈ 4.92</p>
            <p>So, the standard deviation of the exam scores is approximately 4.92.</p>
        </div>
    </div>
  </div>
   
  </div>
  
  
  