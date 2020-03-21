<?php
    namespace backend\controllers;

    use Interop\Container\ContainerInterface;

    abstract class controller {
        protected $container;

        public function __construct(ContainerInterface $container) {
            $this->container = $container;
        }
    }