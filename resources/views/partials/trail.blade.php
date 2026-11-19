<div class="pooo">
    <!-- Popup Form Wrapper -->
    <div class="popup-wrapper" id="popupWrapper">
        <div class="popup-container">
            <div id="trail_alert"></div>
            <form action="" id="trail_form" method="post">
                @csrf
                <button type="button" class="btn-close-popup" onclick="hidePopup()" aria-label="Close">X</button>
                <h2 style="color: #A52673">Book Free Consultation</h2>
                <input type="email" name="email" id="trail_email" placeholder="Your Email" aria-label="Your email" autocomplete="email">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <input class="mb-2 is-invalid" type="tel" name="phone" id="trail_phone" placeholder="Your Phone" aria-label="Your phone" autocomplete="tel" style='padding: 10px; border-radius: 5px;'>
                @error('phone')
                    <div class="text-danger ">{{ $message }}</div>
                @enderror
                <textarea name="message" id="trail_message" aria-label="Message" cols="30" rows="2" placeholder="Message.." style='padding: 10px; border-radius: 5px;'></textarea>
                @error('message')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="submit" class="btn-submit mt-1">
                {{-- <button type="submit" >Submit</button> --}}
            </form>
        </div>
    </div>
</div>
