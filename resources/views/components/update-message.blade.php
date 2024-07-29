@if(session()->has('update-message')  && session()->has('title'))
<div x-data="{show : true}" x-show="show" x-init="setTimeout(() => show = false,
  5000)" class="bg-[#161B22] fixed bottom-0 z-50 right-0 mr-5 mb-5 border-t-4 border-[#1F6FEB] rounded-b text-[#8D96A0] px-4 py-3 shadow-md" role="alert">
  <div class="flex">
    <div class="py-1"><svg class="h-5 w-5 fill-[#1F6FEB] mr-4" width="800px" height="800px" viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="m 12.80469,8.25 q 0,0.03906 -0.008,0.05469 -0.5,2.093751 -2.09376,3.394532 Q 9.10937,13 6.96875,13 5.82812,13 4.76172,12.570312 3.69531,12.140625 2.85938,11.34375 L 1.851562,12.351563 Q 1.703125,12.5 1.5,12.5 1.296875,12.5 1.148437,12.351563 1,12.203125 1,12 V 8.5 Q 1,8.296875 1.148437,8.148438 1.296875,8 1.5,8 H 5 Q 5.20312,8 5.35156,8.148438 5.5,8.296875 5.5,8.5 5.5,8.703125 5.35156,8.851562 L 4.28125,9.921875 Q 4.83594,10.4375 5.53906,10.71875 6.24219,11 7,11 8.04687,11 8.95313,10.492187 9.85937,9.984375 10.40625,9.09375 10.49215,8.960938 10.82031,8.179688 10.88281,8 11.05469,8 h 1.5 q 0.10156,0 0.17578,0.07422 0.0742,0.07422 0.0742,0.175781 z M 13,2 V 5.5 Q 13,5.703125 12.85156,5.851562 12.70313,6 12.5,6 H 9 Q 8.79687,6 8.64844,5.851562 8.5,5.703125 8.5,5.5 8.5,5.296875 8.64844,5.148438 L 9.72656,4.070312 Q 8.57031,3 7,3 5.95313,3 5.04688,3.507813 4.14063,4.015625 3.59375,4.90625 3.50785,5.039062 3.17969,5.820312 3.11719,6 2.94531,6 H 1.390625 Q 1.289062,6 1.214844,5.92578 1.140624,5.85156 1.140624,5.749999 V 5.695309 Q 1.648438,3.601562 3.25,2.300781 4.85156,1 7,1 8.14063,1 9.21875,1.433594 10.29687,1.867187 11.13281,2.65625 L 12.14844,1.648437 Q 12.29688,1.5 12.5,1.5 12.70313,1.5 12.85156,1.648437 13,1.796875 13,2 z"/></svg>
    </div>
    
    <div>
      <p class="font-bold">{{session('title')}}</p>
      <p class="text-sm">{{session('update-message')}}</p>
    </div>
  </div>
</div>
@endif