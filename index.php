<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
        <script src="https://unpkg.com/aframe-look-at-component@0.8.0/dist/aframe-look-at-component.min.js"></script>
        <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>
        <script src="https://raw.githack.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
    </head>

    <body style="margin: 0; overflow: hidden;">
        <a-scene
            renderer="logarithmicDepthBuffer: true;"
            embedded
            loading-screen="enabled: false;"
            arjs="sourceType: webcam; debugUIEnabled: false;"
        >
            <a-assets>
                <a-asset-item
                    id="animated-asset"
                    src="assets/quesillox.glb"
                ></a-asset-item>
            </a-assets>

                <a-entity
                    look-at="[gps-camera]"
                    animation-mixer="loop: repeat"
                    gltf-model="#animated-asset"
                    scale="0.5036440010873533 0.5036440010873533 0.5036440010873533"
                    gps-entity-place="latitude: 17.265134954260667; longitude: -97.67795490062225;"
                ></a-entity>
                <a-entity
                    look-at="[gps-camera]"
                    animation-mixer="loop: repeat"
                    gltf-model="#animated-asset"
                    scale="0.5036440010873533 0.5036440010873533 0.5036440010873533"
                    gps-entity-place="latitude: 17.932767; longitude: -97.960991;"
                ></a-entity>

            <a-camera gps-camera rotation-reader></a-camera>
        </a-scene>
    </body>
</html>