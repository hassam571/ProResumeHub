<!-- Footer -->
<footer class="footer">
    <div class="copy">
        <p>E: {{ $users->email ?? 'Not Provided' }}</p>
        <p>T: {{ $users->phone ?? 'Not Provided' }}</p>
    </div>
    <div class="soc-box">
        <div class="follow-label">Follow Me</div>
        <div class="soc">
            @if (!empty($users->facebook_link))
                <a target="_blank" href="{{ $users->facebook_link }}">
                    <span class="icon fab fa-facebook"></span>
                </a>
            @endif
            @if (!empty($users->instagram_link))
                <a target="_blank" href="{{ $users->instagram_link }}">
                    <span class="icon fab fa-instagram"></span>
                </a>
            @endif
            @if (!empty($users->linkedin_link))
                <a target="_blank" href="{{ $users->linkedin_link }}">
                    <span class="icon fab fa-linkedin"></span>
                </a>
            @endif
            @if (!empty($users->other_platform))
                <a target="_blank" href="{{ $users->other_platform }}">
                    <span class="icon fab fa-globe"></span>
                </a>
            @endif
        </div>
    </div>
    <div class="clear"></div>
</footer>

<!-- Lines -->
<div class="lines">
    <div class="content">
        <div class="line-col"></div>
        <div class="line-col"></div>
        <div class="line-col"></div>
        <div class="line-col"></div>
        <div class="line-col"></div>
    </div>
</div>
