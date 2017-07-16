<template>
    <div class="container">
        <div>
            <div>
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style lang="scss" scoped>
    .container {
        background: yellow;
        margin: 0 auto;
        width: 100%;

    }

</style>
