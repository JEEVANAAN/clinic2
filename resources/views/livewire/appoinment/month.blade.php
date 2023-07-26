 <div>
 
     <div class=" mb-4">
         <h1 class=" font-medium">{{ $currentMonth }}</h1>
     </div>
     <!-- Date section start  -->
     <div class=" flex gap-4 lg:gap-10 overflow-x-auto lg:mt-10">
        @foreach ($period as $date)
            <div @click="date=('{{ $date->format('Y-m-d') }}')"
                :class="date ==('{{ $date->format('Y-m-d') }}') ? fix + custom : fix + custom1">
                <h6 class=" font-medium text-sm uppercash">{{ strtoupper($date->format('D')) }}</h6>
                <h6 class=" font-normal text-sm text-center mt-2">{{ $date->format('d') }}</h6>
            </div>
        @endforeach
     </div>
     <!-- Date section end  -->
 </div>
 
 