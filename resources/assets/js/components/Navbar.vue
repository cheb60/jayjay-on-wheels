<template>
    <div id="navigation">
        <div class="container">
            <div class="navigation-bar">
                <div class="logo">
                    <img src="https://dummyimage.com/200x100">
                </div>
                <div class="nav-wrapper">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Motoren</a></li>
                        <li><a href="#">Ritten</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        }
    }
</script>

<style lang="scss">
    #navigation {
        background: rgba(0,0,0,0.5);
        .navigation-bar {
            display: flex;
            .nav-wrapper {
                align-items: center;
                display: flex;
                padding: 0 0 0 20px;
                ul {
                    margin: 0;
                    padding: 0;
                    display: flex;
                    li {
                        list-style: none;
                        margin: 0 5px;
                        a {
                            padding: 10px 20px;
                            color: #fff;
                            text-decoration: none;
                            background: #FFA500;
                            font-weight: 700;
                            letter-spacing: 1px;
                            font-size: 16px;
                            border-radius: 5px;
                            display: block;
                        }
                    }
                }
            }
        }
    }
</style>
