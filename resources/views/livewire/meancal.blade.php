<div>
  <div class="container  border border-1 p-2 rounded-2">
    <h2 class="text-center my-2">Mean Calculator</h2>
        <form wire:submit="calculateMean">
        <div class="row my-3"> 
            <div class="col-lg">
                <label for="exampleFormControlInput1" class="form-label ms-1">Input Your Data</label>
                <input wire:model="datas" type="text" class="form-control" id="exampleFormControlInput1" placeholder="i.e 1,3,7,8,10" required/>
            </div>
        </div>
         
        <div class="row mb-3">
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
    
            <div class="col-lg-2 d-flex align-items-center ">
                <button type="submit" class="btn btn-md btn-success">calculate!</button>
            </div> 
        </div>    
        
       </form>
    @if ($result !== null && $result !== '')
    <h5 class="my-3 ms-1">Mean of this data is : <span class="text-primary">{{ $result }}</span></h5>
    @endif

  </div>

  <div class="container mt-5">
    <h3 class="">Glimpse of Mean (Average)</h3>
    <div class="row ">
        <div class="col-lg-12">
            <p>The Mean (Average) is a value that measures the central tendency of a set of data. It is one of the most basic statistical measures and is often used to describe the typical value of data. Here's a brief overview of how the mean is calculated:</p>
            <h3>Mean Formula:</h3>
            <p>Mean (μ) = Σxi / N</p>
            <ul>
                <li>μ: Mean (Average)</li>
                <li>Σ: Summation (Sum of all values in the dataset)</li>
                <li>xi: Each value in the dataset</li>
                <li>N: Total number of values in the dataset</li>
            </ul>
            <p>The mean provides an idea of the central value of the data. It is the result of dividing the total sum of values by the number of values in the dataset.</p>
        </div>
    </div>
    <div class="row  mt-4">
        <div class="col-lg-12">
            <h3>Example Calculation:</h3>
            <p>For instance, let's consider a dataset of exam scores:</p>
            <ul>
                <li>Exam Scores: 85, 90, 88, 92, 78</li>
            </ul>
            <p>Step 1: Calculate the Mean</p>
            <p>Mean (μ) = (85 + 90 + 88 + 92 + 78) / 5 = 86.6</p>
            <p>So, the mean of the exam scores is 86.6.</p>
        </div>
    </div>
    </div>


 
</div>


