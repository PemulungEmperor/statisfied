<div>
    @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible px-3 pt-3">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ session('error') }}
    </div>
    @endif

    <div class="container  border border-1 p-2 rounded-2">
      <h2 class="text-center my-2">Weighted Mean Calculator</h2>
          <form wire:submit="calculateMean">
          <div class="row my-3"> 
              <div class="col-lg-6">
                  <label for="exampleFormControlInput1" class="form-label ms-1">Input Your Data</label>
                  <input wire:model="datas" type="text" class="form-control" id="exampleFormControlInput1" placeholder="i.e 1,3,7,8,10" required/>
              </div>

              <div class="col-lg-6">
                <label for="exampleFormControlInput2" class="form-label ms-1">Input Weight Data </label>
                <input wire:model="frequency_data" type="text" class="form-control" id="exampleFormControlInput2" placeholder="i.e 2,2,2,3,5" required/>
            </div>
          </div>
           
          <div class="row">
              <div class="col-lg-4" id="decimal">
                  <input wire:model="decimal_count" type="number" class="form-control" placeholder="Decimal (optional, i.e : 2)" @if($selected_radio == "rounded") disabled @endif/>
              </div>
      
              <div class="col-lg-3 d-flex align-items-center">
                  <input wire:model.live="selected_radio" value="" id="not_rounded" name="flexRadioDefault" type="radio" />
                  <label for="not_rounded">Not Rounded</label>
              </div>
      
              <div class="col-lg-3 d-flex align-items-center">
                  <input wire:model.live="selected_radio" wire:click="toogleDecimal" value="rounded" id="rounded" name="flexRadioDefault" type="radio"/>
                  <label for="down">Rounded</label>
              </div>
      
              <div class="col-lg-2 mt-3 d-flex align-items-end justify-content-center">
                  <button type="submit" class="btn btn-md btn-success">calculate!</button>
              </div> 
          </div>
          
          <p class="my-3 text-muted fs-6">* Match the weight order of the data in example if data = 1,2,3 the weight = 1,3,1 that means 1 has  weight , 2 has 3 weight and 3 has 1</p>
          
         </form>
         @if ($result !== null && $result !== '')
         <h5 class="my-3 ms-1">Weighted Mean of this group data is : <span class="text-primary">{{ $result }}</span></h5>
        @endif
    </div>
  
    <div class="mt-4">
        <main>
            <section>
                <h3>Understanding Weighted Mean</h3>
                <p>A glimpse of weighted mean, also known as the weighted average, provides insight into a statistical concept used to calculate a single value that represents the average of a set of numbers. However, unlike a regular arithmetic mean, the weighted mean assigns different levels of importance or "weights" to each number in the set. This means that some numbers contribute more to the final average than others.</p>
            </section>
    
            <section>
                <h3>Formula for Weighted Mean</h3>
                <p>The formula for calculating the weighted mean is as follows:</p>
                <pre>
    Weighted Mean = (w1 * x1 + w2 * x2 + ... + wn * xn) / (w1 + w2 + ... + wn)
                </pre>
                <p>Where:</p>
                <ul>
                    <li>"x1, x2, ... xn" represent the values in your dataset.</li>
                    <li>"w1, w2, ... wn" represent the weights assigned to each respective value.</li>
                </ul>
            </section>
    
            <section>
                <h3>Example Calculation</h3>
                <p>Let's illustrate how the weighted mean works with an example:</p>
                <ul>
                    <li>Test 1: Score of 80 with a weight of 2.</li>
                    <li>Test 2: Score of 90 with a weight of 3.</li>
                    <li>Test 3: Score of 75 with a weight of 1.</li>
                </ul>
                <p>Using the weighted mean formula, you calculate it as follows:</p>
                <pre>
    Weighted Mean = (80 * 2 + 90 * 3 + 75 * 1) / (2 + 3 + 1) = (160 + 270 + 75) / 6 = 505 / 6 ≈ 84.17
                </pre>
                <p>So, in this case, the weighted mean of the test scores is approximately 84.17. This value takes into account the importance or weight assigned to each test when calculating the average.</p>
            </section>
        </main>
    </div>
  
   
  </div>
  
  
  