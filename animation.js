/**
 * Created by sergeigavrilko on 12.06.17.
 */
window.onload=function()
{
    setInterval(tamingselect, 1500);
}

function tamingselect(){

        var animationElem = document.getElementById('animation');
        var screens = animationElem.getElementsByTagName('img');

        var duration = { duration: 650,
            easing: [ 250, 1, 250] };

        Velocity(screens[0], {
            width: '15%',
            marginLeft: '50%',
            marginTop: '83px',
            display: 'none'
        }, duration);

        Velocity(screens[1], {
            width: '15%',
            marginLeft: '-60%',
            marginTop: '83px',
        }, duration);

        Velocity(screens[2], {
            width: '15%',
            marginLeft: '-50%',
            marginTop: '83px',
        }, duration);

        Velocity(screens[3], {
            width: '16%',
            marginLeft: '-38%',
            marginTop: '73px',
        }, duration);

        Velocity(screens[4], {
            width: '17%',
            marginLeft: '-26%',
            marginTop: '62px',
        }, duration);

        Velocity(screens[5], {
            width: '18%',
            marginLeft: '-9%',
            marginTop: '50px',
        }, duration);

        Velocity(screens[6], {
            width: '17%',
            marginLeft: '9%',
            marginTop: '62px',
        }, duration);

        Velocity(screens[7], {
            width: '16%',
            marginLeft: '22%',
            marginTop: '73px',
        }, duration);

        Velocity(screens[8], {
            width: '15%',
            marginLeft: '36%',
            marginTop: '83px',
        }, duration);

        animationElem.insertBefore(screens[0], screens[9]);
}
