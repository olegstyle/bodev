import {Component} from '@angular/core';
import {FormControl, Validators} from "@angular/forms";

const EMAIL_REGEX = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

export interface FormModel {
    nameValue?: string;
    emailValue?: string;
    messageValue?: string;
    captcha?: string;
}

@Component({
    selector: 'contact-form',
    templateUrl: 'form.component.html',
    styleUrls: ['form.component.css'],
})
export class ContactFormComponent {
    constructor() {}

    emailFormControl = new FormControl('', [
        Validators.required,
        Validators.pattern(EMAIL_REGEX)]);
    public formModel: FormModel = {};


    onSubmit() {
        console.log(this.formModel);
        //this.http.post(Utils.BASE_URL, + 'contact/send', {})
        //    .subscribe();
    }
}
