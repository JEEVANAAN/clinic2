<main>
        <div class=" container px-5 my-5 mx-auto">
            <!-- Schedule section start  -->
            <h1 class=" text-lg font-bold leading-none hidden lg:block text-center font-title">Schedule Your Online Consultation
            </h1>
            <div class=" flex gap-3">
                <div class=" mt-1 md:hidden">
                    <img src="/assets/icons/arrow.svg" alt="">
                </div>
                <div>
                    <h1 class=" text-lg font-bold leading-none md:hidden font-title">Schedule Your Online</h1>
                    <h1 class=" text-lg font-bold leading-none md:hidden font-title">Consultation</h1>
                </div>
            </div>
            <!-- Schedule section end  -->

            <!-- Paragraph section start  -->
            <div class=" mt-4 lg:mt-10">
                <p class=" text-sm text-[#6B7280] md:text-center">Choose your preferred doctor and consultation slot.
                    Fill in your details and you'll be one step away from receiving expert care from the comfort of your
                    home.
                </p>
            </div>
            <!-- Paragraph section end  -->

            <!-- Choose Your Doctor section start  -->
            <div class=" mt-7 lg:mt-10">
                <div>
                    <h1 class=" font-medium md:text-center md:font-bold">Choose Your Doctor</h1>
                </div>
            </div>

                <!-- Desktop male & female flex section start  -->
                    <!-- Male section start  -->
<div x-data="{
            
            time: '',
            tab: 1,
            price: '',
            date: '',
            fix :'border border-[#878787] text-center px-4 py-2 rounded cursor-pointer ',
            custom: 'border border-black bg-black text-white' ,
            custom1: 'border border-black bg-white text-black' ,
            patient(){
                
                if(this.time){
                Livewire.emit('booking_patient',this.tab,this.date,this.time)
                }
            },
             change() {
                fetch(`http://127.0.0.1:8000/t/${this.tab}/${this.date}`)
                    .then(data => data.json())
                    .then(data => {
                        this.price = data['0']['consultation_time']
                    })
            }
            
                    

 }" x-effect="change">
 {{-- <p x-text="price"></p> --}}

                    <livewire:appoinment.doctor />
                    <!-- Male section end  -->
                <!-- Desktop male & female flex section end  -->

            
            <!-- Choose Your Doctor section end  -->
    
            <!-- June section start  -->
            <div class=" mt-6 lg:mt-12 2xl:mx-96">
               <livewire:appoinment.month />
               </div>
            <!-- June section end  -->

            <!-- Morning Slots section start  -->
                <livewire:appoinment.time />
    
            <!-- Button section start  -->
            <div class=" flex justify-center mt-10 lg:mt-20">
                <button  @click="patient"
                class="text-black lg:w-[40%] bg-[#A4CB6A] font-semibold mb-6 w-full text-center py-3 rounded-lg border-[#212245] border-t border-r-4 border-b-4 border-l">Proceed
                to Next</button>
            </div>
            </div>
            <!-- Button section end  -->
        </div>
    </main>
