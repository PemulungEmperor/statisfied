<div>
    <div class="container  border border-1 p-2 rounded-2">
      <h2 class="text-center my-2">Quartiles Calculator</h2>
          <form wire:submit="calculateQuartiles">
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
        @if(!empty($result))
          <h5 class="my-3 ms-1">Quartiles of this data  : @foreach($result as $key => $quartile) <span class="text-primary">Q{{ $key+1 }}: {{ " " }}{{ $quartile }}</span> @endforeach</h5>
        @endif
    </div>

   <div class="mt-3"> 
      <main>
          <section>
              <h3>Understanding Quartiles</h3>
              <p>Quartiles are a statistical concept used to divide a dataset into four equal parts, each containing 25% of the data. They provide insights into the spread and distribution of data. The three quartiles divide the data into four segments: the first quartile (Q1), the second quartile (Q2 or the median), and the third quartile (Q3).</p>
          </section>

          <section>
              <h3>Formula for Quartiles</h3>
              <p>The formulas for calculating the quartiles are as follows:</p>
              <ul>
                  <li>First Quartile (Q1): The 25th percentile.
                      <pre>
      Q1 = (n + 1) / 4
                      </pre>
                  </li>
                  <li>Second Quartile (Q2): The 50th percentile (median).
                      <pre>
      Q2 = (n + 1) / 2
                      </pre>
                  </li>
                  <li>Third Quartile (Q3): The 75th percentile.
                      <pre>
      Q3 = 3 * (n + 1) / 4
                      </pre>
                  </li>
              </ul>
              <p>Where "n" represents the total number of data points in the dataset.</p>
          </section>

          <section>
              <h3>Example Calculation</h3>
              <p>Let's calculate the quartiles for a dataset:</p>
              <ul>
                  <li>Data: 12, 15, 17, 20, 22, 25, 28, 30</li>
                  <li>Total data points (n): 8</li>
              </ul>
              <p>Using the quartile formulas:</p>
              <p>First Quartile (Q1):</p>
              <pre>
      Q1 = (8 + 1) / 4 = 9 / 4 = 2.25
              </pre>
              <p>Since 2.25 is not a whole number, you interpolate between the second and third data points:</p>
              <pre>
      Q1 = 15 + 0.25 * (17 - 15) = 15.5
              </pre>
              <p class="fw-bold">So, Q1 is 15.5.</p>
              <p>Second Quartile (Q2, Median):</p>
              <pre>
      Q2 = (8 + 1) / 2 = 9 / 2 = 4.5
              </pre>
              <p>Since 4.5 is not a whole number, you interpolate between the fourth and fifth data points:</p>
              <pre>
      Q2 = 20 + 0.5 * (22 - 20) = 21
              </pre>
              <p class="fw-bold">So, Q2 (median) is 21.</p>
              <p>Third Quartile (Q3):</p>
              <pre>
      Q3 = 3 * (8 + 1) / 4 = 27 / 4 = 6.75
              </pre>
              <p>Since 6.75 is not a whole number, you interpolate between the sixth and seventh data points:</p>
              <pre>
      Q3 = 25 + 0.75 * (28 - 25) = 26.75
              </pre>
              <p class="fw-bold">So, Q3 is 26.75.</p>
          </section>
      </main>

      {{-- <p >If you want to calculate group data quartiles + interquartiles check this out! <a target="_blank" href="/calculator/interquartiles">Interquartiles calculator</a></p> --}}
  </div>

  
  
  