<div>
    
    <div x-data="{
        
        current_time :'{{date('H:i:s')}}' ,
        current_ex : 'text-[#6B7280] text-xs border border-[#D1D5D8] text-center py-2 cursor-not-allowed',
        current : 'text-xs border border-[#878787] text-center py-2 cursor-pointer', 
    }">

    <div class=" mt-6 lg:mt-16 2xl:mx-96">
                <div class=" mb-4">
                    <h1 class=" font-medium">Morning Slots</h1>
                </div>
                <!-- Time section start  -->
                <div class=" grid grid-cols-3 gap-4 lg:gap-10 lg:grid-cols-6 lg:mt-10">
                    @foreach($arrayOfTime as $time)
                        <button :class="('{{date('H:i:s')}}') > ('{{ date('H:i:s',$time) }}') 
                                && date == ('{{ $today }}') 
                                || price == ('{{ date('H:i:s', $time) }}')
                                ?  current_ex : current" 
                                :disabled="current_time < ('{{ date('H:i:s',$time) }}') || date !=('{{ $today }}') ?  false : true"
                                @click="time=('{{ date('H:i:s',$time) }}')"  
                                :style="time == ('{{ date('H:i:s',$time) }}') ?     
                                'background-color:black; color: white;' :
                                'background: white: color; black;'"> 
                        {{ date("h:i A", $time) }}</button>
                    @endforeach
                </div>
                <!-- Time section end  -->

            </div>
            <!-- Morning Slots section end  -->

            <!-- Afternoon Slots section start  -->
            <div class=" mt-6 lg:mt-16 2xl:mx-96">
                <div class=" mb-4">
                    <h1 class=" font-medium">Afternoon Slots</h1>
                </div>

                <!-- Time section start  -->
                <div class=" grid grid-cols-3 gap-4 lg:gap-10 lg:grid-cols-6 lg:mt-10">

                    @foreach ($arrayOfTi as $time)   
                        <button :class="('{{date('H:i:s')}}') > ('{{ date('H:i:s',$time) }}') 
                                && date == ('{{ $today }}') 
                                || price == ('{{ date('H:i:s', $time) }}')
                                ?  current_ex : current" 
                                :disabled="current_time < ('{{ date('H:i:s',$time) }}') || date !=('{{ $today }}') ?  false : true"
                                @click="time=('{{ date('H:i:s',$time) }}')"  
                                :style="time == ('{{ date('H:i:s',$time) }}') ?     
                                'background-color:black; color: white;' :
                                'background: white: color; black;'"> 
                        {{ date("h:i A", $time) }}</button>
                    @endforeach
                </div>
                <!-- Time section end  -->
            </div>
            <!-- Afternoon Slots section end  -->

            <!-- Evening Slots section start  -->
            <div class=" mt-6 lg:mt-16 2xl:mx-96">
                <div class=" mb-4">
                    <h1 class=" font-medium">Evening Slots</h1>
                </div>

                <!-- Time section start  -->
                <div class=" grid grid-cols-3 gap-4 lg:gap-10 lg:grid-cols-6 lg:mt-10">
                    @foreach ($arr as $time) 
                        <button :class="('{{date('H:i:s')}}') > ('{{ date('H:i:s',$time) }}') 
                                && date == ('{{ $today }}') 
                                || price == ('{{ date('H:i:s', $time) }}')
                                ?  current_ex : current" 
                                :disabled="current_time < ('{{ date('H:i:s',$time) }}') || date !=('{{ $today }}') ?  false : true"
                                @click="time=('{{ date('H:i:s',$time) }}')"  
                                :style="time == ('{{ date('H:i:s',$time) }}') ?     
                                'background-color:black; color: white;' :
                                'background: white: color; black;'"> 
                        {{ date("h:i A", $time) }}</button>
                    @endforeach
                </div>
                <!-- Time section end  -->
            </div>
            <!-- Evening Slots section end  --> 
</div>
</div>
