    <div x-data="{
                tab: 1,
                fix: 'flex px-5 py-5 rounded-lg mt-5 ' ,
                click1: 'border-[#212245] border-t border-r-4 border-b-4 border-l',
                click2: 'border-t border-r-4 border-b-4 border-l'
            }">
    <div class=" md:flex justify-between gap-16 2xl:mx-96 lg:mt-7">

     <!-- Male section start and femal section start  -->

    @foreach ($doctors as $details)
            
                    <div @click="tab={{$details->id}}" :class="tab == {{$details->id}} ? fix + click1 : fix + click2">
                    
                        <div>
                            <img src="male_doctor.png" alt="" class=" w-20">
                        </div>
                        <div class=" ml-5">
                            <h3 class=" text-sm font-medium md:font-bold">{{$details->name}}</h3>
                            <span class=" text-xs text-[#6B7280]">{{$details->specialization}}
                            </span>
                                <h6 class=" text-sm font-semibold mt-3">&#36;{{$details->fee}}</h6>
                        </div>
                        <div>
                            <label for="name">
                            <input type="checkbox" name="name" id="name" class=" w-4 h-4 accent-[#212245]"@click="tab={{$details->id}}" :checked="tab=={{$details->id}}" ? true : false>
                        </label>
                            
                        </div>
                    </div>
    @endforeach
            </div>
            </div>

    <!-- Male section end Female section end -->
    