pipeline {
  agent any
  stages {
    stage('Select App') {
      steps {
        input(message: 'APP_NAME', id: 'APP_NAME', ok: 'Tamam')
      }
    }

    stage('Select Version') {
      steps {
        input(message: 'APP_VERSION', id: 'APP_VERSION', ok: 'Tmm')
      }
    }

  }
  environment {
    APP_NAME = 'client'
  }
}