import React, { Component } from 'react';
import { Row, Col, Button } from 'react-bootstrap';
import { withNamespaces } from 'react-i18next';
import './SubscriptionComponent.css';


class Subscription extends Component {
    constructor(props) {
        super(props);
        this.state = {
            emailValue: '',
            isValidSubscription: false
        };

        this.signUpSubscription = this.signUpSubscription.bind(this);
        this.handleEmailChange = this.handleEmailChange.bind(this);
    }

    signUpSubscription() {
        let _email = this.state.emailValue;
        if (!_email.includes("@")) {
            this.setState({
                isValidSubscription: false
            });
        } else {
            this.setState({
                isValidSubscription: true
            });
            let url = "https://www.ncovid19.it/News/Subscription.php?email=" + _email;
            fetch(url);
        }
    }

    handleEmailChange(event) {
        this.setState({
            emailValue: event.target.value
        });
    }

    render() {
        const { t } = this.props;
        return (
            <Row >
                <Col></Col>
                <Col className="subscriptionStyleCol">
                    <Row className="subscriptionText">
                        <Col>
                            {t('SIGN UP FOR COVID-19 UPDATES')}
                        </Col>
                    </Row>
                    <Row >
                        <Col>
                            <input className='subscriptionEmailInput' type="email" name="ne" placeholder="Email" onChange={this.handleEmailChange} />
                        </Col>
                    </Row>
                    <Row>
                        <Col className='subscriptionButtonColumn'>
                            <Button onClick={this.signUpSubscription}>{t('SIGN UP')}</Button>
                        </Col>
                    </Row>
                    <Row>
                        {this.state.isValidSubscription &&
                            (<Col className="validSubscription">{t('Thank You!')} <br />{t('Your subscription has been confirmed')}</Col>)
                        }
                    </Row>
                </Col>
                <Col></Col>
            </Row >
        );
    }
}



export default withNamespaces()(Subscription);