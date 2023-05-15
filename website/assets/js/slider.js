function slider(MAX_WIDTH) {
    return function() {
        const jssor_1_SlideshowTransitions = [
            {
                $Duration: 500,
                $Delay: 12,
                $Cols: 10,
                $Rows: 5,
                $Opacity: 2,
                $Clip: 15,
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                $Assembly: 2049,
                $Easing: $Jease$.$OutQuad
            },
            {
                $Duration: 500,
                $Delay: 40,
                $Cols: 10,
                $Rows: 5,
                $Opacity: 2,
                $Clip: 15,
                $SlideOut: true,
                $Easing: $Jease$.$OutQuad
            },
            {
                $Duration: 1000,
                x: -0.2,
                $Delay: 20,
                $Cols: 16,
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationStraight,
                $Assembly: 260,
                $Easing: {$Left: $Jease$.$InOutExpo, $Opacity: $Jease$.$InOutQuad},
                $Opacity: 2,
                $Outside: true,
                $Round: {$Top: 0.5}
            },
            {
                $Duration: 1600,
                y: -1,
                $Delay: 40,
                $Cols: 24,
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationStraight,
                $Easing: $Jease$.$OutJump,
                $Round: {$Top: 1.5}
            },
            {
                $Duration: 1200,
                x: 0.2,
                y: -0.1,
                $Delay: 16,
                $Cols: 10,
                $Rows: 5,
                $Opacity: 2,
                $Clip: 15,
                $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]},
                $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                $Assembly: 260,
                $Easing: {$Left: $Jease$.$InWave, $Top: $Jease$.$InWave, $Clip: $Jease$.$OutQuad},
                $Round: {$Left: 1.3, $Top: 2.5}
            },
            {
                $Duration: 1500,
                x: 0.3,
                y: -0.3,
                $Delay: 20,
                $Cols: 10,
                $Rows: 5,
                $Opacity: 2,
                $Clip: 15,
                $During: {$Left: [0.2, 0.8], $Top: [0.2, 0.8]},
                $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                $Assembly: 260,
                $Easing: {$Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad},
                $Round: {$Left: 0.8, $Top: 2.5}
            },
            {
                $Duration: 1500,
                x: 0.3,
                y: -0.3,
                $Delay: 20,
                $Cols: 10,
                $Rows: 5,
                $Opacity: 2,
                $Clip: 15,
                $During: {$Left: [0.1, 0.9], $Top: [0.1, 0.9]},
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                $Assembly: 260,
                $Easing: {$Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad},
                $Round: {$Left: 0.8, $Top: 2.5}
            }
        ];
        const jssor_1_options = {
            $AutoPlay: 1,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 16,
                $SpacingY: 16
            }
        };

        const jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        function ScaleSlider() {
            const containerElement = jssor_1_slider.$Elmt.parentNode;
            const containerWidth = containerElement.clientWidth;
            if (containerWidth) {
                let expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
}
function showSliderButton() {
    let buttons = document.getElementsByClassName("jssora093");
    for (let i = 0; i < buttons.length; i++){
        buttons[i].style.background="var(--primary-color)";
        buttons[i].style.color="white";
    }

}
function hideSliderButton() {
    let buttons = document.getElementsByClassName("jssora093");
    for (let i = 0; i < buttons.length; i++){
        buttons[i].style.background="transparent";
        buttons[i].style.color="transparent";
    }


}
function jssora093Hover(index){
}