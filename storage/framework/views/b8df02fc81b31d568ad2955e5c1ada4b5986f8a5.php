<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"
          integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">

    <div id="app">
        <v-card
                class="mx-auto hide-overflow pr-0"
                height="700"
        >

            <v-app-bar
                    class="pt-2"
                    height="70"
                    color="#7db70d"
                    dark
                    prominent
            >
                <v-btn
                        class="mt-2"
                        color="#7db70d"
                        depressed
                        @click.stop="drawer = !drawer"
                >
                    <v-icon right>fas fa-bars</v-icon>
                </v-btn>

                <v-spacer></v-spacer>

                <v-btn icon>
                    <i class="fas fa-search"></i>
                </v-btn>

                <v-btn icon>
                    <i class="fas fa-ellipsis-v"></i>
                </v-btn>
            </v-app-bar>

            <v-navigation-drawer
                width="90%"
                v-model="drawer"
                fixed
            >
                <v-app-bar
                    class="pt-2"
                    height="50"
                    color="#7db70d"
                    dark
                    small
                    prominent
                    flat
                >
                    <v-icon
                            large
                            @click.stop="activeTab = null"
                            @click="increaseTabSize"
                    >
                        fas fa-caret-left
                    </v-icon>

                    <v-spacer></v-spacer>

                    <div v-if="activeTab !== null">
                        {{ items[activeTab].title }}
                    </div>

                    <v-spacer></v-spacer>

                    <v-icon
                            large
                            @click="drawer = !drawer"
                            @click="increaseTabSize"
                    >
                        fas fa-times
                    </v-icon>
                </v-app-bar>
                <?php echo $__env->make('navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </v-navigation-drawer>
        </v-card>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.vuetify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/cbr/Sites/vue/laravel/resources/views/vuetify.blade.php ENDPATH**/ ?>