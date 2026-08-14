<div class="pooo">
    <!-- Popup Form Wrapper -->
    <div class="popup-wrapper" id="popupWrapper">
        <div class="popup-container">
            <div id="alert"></div>
            <form action="" id="trail_form" method="post">
                @csrf
                <button class="btn-close-popup" onclick="hidePopup()">X</button>
                <h2 style="color: #A52673">Book Free Consultation</h2>
                <input type="email" name="email" id="email" placeholder="Your Email">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <input class="mb-2 is-invalid" type="phone" name="phone" id="phone" placeholder="Your Phone" style='padding: 10px; border-radius: 5px;'>
                @error('phone')
                    <div class="text-danger ">{{ $message }}</div>
                @enderror
                <textarea name="message" id="message" cols="30" rows="2" placeholder="Message.." style='padding: 10px; border-radius: 5px;'></textarea>
                @error('message')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="submit" class="btn-submit mt-1">
                {{-- <button type="submit" >Submit</button> --}}
            </form>
        </div>
    </div>
</div>
