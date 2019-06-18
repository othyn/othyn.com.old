<template>
    <div class="row h-100 align-items-center text-center">
        <div class="col-12">
            <h1 class="title rainbow"
                @mouseover="onMouseOver($event)"
                @mouseleave="onMouseLeave($event)"
            >
                {{ title }}.
            </h1>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            isFullScreen: {
                type: Boolean,
                required: false,
                default: false
            }
        },
        data: () => ({
            title: '',
            words: ['othyn', 'code', 'photo', 'fun', 'game', 'dog', 'apple', 'php', 'laravel', 'github', 'twitter', 'youtube', 'space', 'your mum', 'vue', 'sublime', 'hyper', 'swift', 'pc', 'mac', 'sass', 'skiing', 'movies', 'halo', 'cod', 'battlefield', 'factorio', 'sums', 'lincoln', 'developer', 'physics', 'music', 'design', 'play', 'experiment', 'change', 'words'],
            wordInterval: 150,
            currentWordBlastCount: 0,
            currentWordBlastTimeout: 0
        }),
        computed: {
            maxWords() {
                return (this.words.length - 1)
            }
        },
        methods: {
            onMouseOver(event) {
                if (this.isFullScreen) {
                    $('body').addClass('rainbow')
                    $(event.target).removeClass('rainbow')
                }
            },
            onMouseLeave(event) {
                if (this.isFullScreen) {
                    $('body').removeClass('rainbow')
                    $(event.target).addClass('rainbow')
                }
            },
            reset() {
                this.title = this.words[0]
            },
            getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min + 1) + min)
            },
            getRandomTimeout() {
                return this.getRandomInt(3, 7) * 1000
            },
            getRandomCount() {
                return this.getRandomInt(3, 7)
            },
            getRandomWord() {
                return this.words[ this.getRandomInt(1, this.maxWords) ]
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
        },
        mounted() {
            this.reset()
            this.wordBlast()
        }
    }
</script>
