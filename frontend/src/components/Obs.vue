<template>
<div class="wrapper">
<vue-headful
    title="Obs guide"
    description="Description from vue-headful"
/>
<SidebarComponent></SidebarComponent>
<div class="container-fluid header-container">
    <b-row class="top-row setup-guide">
        <b-col lg="8" md="10" sm="12" class="mt-5 pb-5">
           <SearchbarComponentWhite></SearchbarComponentWhite>
            <h1 class="ml-5">OBS setup</h1>
        </b-col>
        <b-col lg="6" class="mt-5 ml-5 pb-1">
            <h2>Downloading and Launching OBS</h2>
        </b-col>
    </b-row>

    <b-row class="ml-4 setup-guide">
        <b-col lg="10" md="10" sm="12" class="mt-5 ml-5 pb-5">
            <p>All big things start small, and your venture into streaming begins with a download of OBS, <a href="https://obsproject.com/" target="_blank">Open Broadcaster Software</a>. Make sure you’re downloading for the right operating system, and rest easy knowing everything explained below will work across Windows, Mac, and Linux.</p>
            <p>Once downloaded and installed, launch OBS and look upon the software that most streamers use to broadcast themselves to the world. While there is other broadcasting software out there, OBS is a household name for the Twitch community and its streamers. With your OBS now open, let’s begin to explore why it’s so popular.</p>
            <img src="@/assets/img/obs-interface.jpg">
            <h2>OBS Studio Layout Basics</h2>
            <h3>1. Preview</h3>
            <p>
            The large space that takes up most of OBS Studio’s interface is the Preview. This window is where you,the streamer, will see what’s being broadcast from your screen out into the Great Twitch Beyond.
            </p>
            <p>
            Your first thought may be similar to mine the first time I opened OBS: Well, won’t I always just be broadcasting what my monitor is showing? Why do I need a Preview of what I’m already looking at?
            </p>
            <p>
            Ahhhh, so young, so naive. At least, I was. No! As we explore OBS, you’ll come to find that what you see isn’t always exactly what your viewers see. You can add all kinds of graphics and customizations to your stream, it’s your blank canvas to be artistic on!</p>
            <img src="@/assets/img/obs-preview.jpg">
            <h3>2. Scenes</h3>
            <p>The Scenes window is where you will build and manage those different screens that can be broadcast to your viewers.</p>
            <p>Thinking of your favorite streamers, you may recall their Stream Starting Soon screen, or their Be Right Back screen for when they can no longer ignore the bathroom.</p>
            <p>These are examples of different scenes that the streamer has set up in their broadcasting software. It’s here in Scenes that all those different screens live. Switching between these scenes changes what the viewers see on streaming websites!</p>
            <img src="@/assets/img/obs-scenes.jpg">
            <h3>3. Sources</h3>
            <p>Every Scene in a movie needs actors, lighting, and props. It’s exactly the same in streaming. All of those live within Sources. This is where everything from your webcam to the game itself exists as a Source for carefree management. Think of a source as an individual element that makes up a scene. For example, your Game scene might contain the following sources</p>
            <ul>
                <li>Game capture</li>
                <li>Webcam</li>
                <li>Browser </li>
                <li>Twitch chat</li>
            </ul>
            <p>Other assets like Twitch stream overlays belong in this section as well. Keep Sources in mind when you’re ready to put a new coat of paint on your stream.</p>
            <img src="@/assets/img/obs-sources.jpg">
            <h3>4. Controls</h3>
            <p>On the far right of OBS, you’ll find your streaming salvation. It’s the Big Red Button that you must press with great care…</p><p>

            Well, it’s not red, or that big, but you’ll find your Start Streaming button in the Controls area. This button will send you streaming live to the world of Twitch, but we’ve got some other things to take care of before that button will work. Hold tight.</p>
            <img src="@/assets/img/obs-controls.jpg">
            <h3>5. Stream Performance Info</h3>
            <p>In the bottom right, you’ll see some stats about your stream. Stats include how long you’ve been streaming or recording, as well as your FPS and CPU usage.</p>
            <p>When you are actually streaming, this will also show your current bitrate, an indication of your current connection to the Twitch server, as well as the number of frames that OBS has had to drop due to either an overworked CPU or an unstable connection.</p>
            <img src="@/assets/img/obs-stream-info.jpg">
        </b-col>
    </b-row>
    <b-row class="ml-4 setup-guide">
        <b-col lg="10" md="10" sm="12" class="ml-5 pb-5">
            <h2>Adding a Scene in OBS </h2>
            <h3>Game Scene</h3>
            <ul>
                <li>Game Scene</li>
                <li>Add Advertisement</li>
                <li>Stream Starting Soon Scene</li>
            </ul>
            <p>This is probably the scene you are most familiar with. Most commonly it includes the game that the streamer is playing, their webcam and some overlays to make things look good. Below I have included some screenshots of example Game Scenes from some popular streamers.</p>
            <img src="@/assets/img/tim.jpg">
        </b-col>
    </b-row>
</div>
</div>
</template>

<script>
import SidebarComponent from './SidebarComponent.vue'
import SearchbarComponentWhite from './SearchbarComponentWhite.vue'

export default {
  name: 'app',
  components: {
    'SidebarComponent': SidebarComponent,
    'SearchbarComponentWhite': SearchbarComponentWhite
  }
}
</script>

<style lang="scss">
@import "../assets/css/variables.scss";

.setup-guide{
    h1 {
        color: $dark;
    }
    h1:after {
        position: absolute;
        content: '';
        border-bottom: 2px solid $gh-purple;
        width: 100%;
        transform: translateX(-50%);
        bottom: 15px;
    }
    h2 {
        color: $gh-purple;
        font-weight: 500;
    }
    h3 {
        font-weight: 500;
    }
    img {
        max-width: 60%;
        margin-bottom: 50px;
        -webkit-box-shadow: 3px 3px 6px 0px rgba(0,0,0,0.16) !important;
        -moz-box-shadow: 3px 3px 6px 0px rgba(0,0,0,0.16) !important;
        box-shadow: 3px 3px 6px 0px rgba(0,0,0,0.16) !important;
    }
    
}

</style>