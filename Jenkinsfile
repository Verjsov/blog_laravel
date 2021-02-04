pipeline {
  agent {
    docker {
      image 'php:7.4-cli'
    }

  }
  stages {
    stage('error') {
      steps {
        sh 'php -v'
      }
    }

  }
}