<template>
    <span
        @mouseover="onMouseOver($event)"
        @mouseleave="onMouseLeave($event)"
    >
        <slot></slot>
    </span>
</template>

<script>
    export default {
        data: () => ({
            interval: null
        }),
        methods: {
            onMouseOver(event) {
                this.interval = setInterval(() =>
                    element.innerText = scrambleText(originalText)
                , 100)
            },
            onMouseLeave(event) {
                clearInterval(this.interval)
                element.innerText = originalText
                // https://stackoverflow.com/questions/50298298/how-to-pass-a-method-in-vue-js-slot-scope
                // https://codepen.io/stphnnnn/pen/PmEdVw
            },
            getRandomInt(max) {
                return Math.floor(Math.random() * max)
            },
            getRandomFromArray(array) {
                return array[randomInt(array.length)]
            },
            wordBlast() {
                if (this.currentWordBlastCount > 0) {
                    this.title = this.getRandomWord()
                    --this.currentWordBlastCount
                    setTimeout(this.wordBlast, this.wordInterval)
                } else {
                    this.reset()
                    this.currentWordBlastCount = this.getRandomCount()
                    this.currentWordBlastTimeout = this.getRandomTimeout()
                    setTimeout(this.wordBlast, this.currentWordBlastTimeout)
                }
            },
        }
    }
</script>
