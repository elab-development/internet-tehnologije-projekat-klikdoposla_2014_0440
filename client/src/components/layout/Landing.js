import React from 'react';
import { Link, Redirect } from 'react-router-dom';
import { connect } from 'react-redux';
import PropTypes from 'prop-types';

const Landing = ({ isAuthenticated }) => {
    if (isAuthenticated) {
        return <Redirect to='/dashboard' />;
    }
    return (
        <section className='landing'>
            <div className='dark-overlay'>
                <div className='landing-inner'>
                    <h1 className='x-large'>Klik do posla Srbija</h1>
                    <p className='lead'>
                        Upoznaj nove kolege, pronadji idealan posao za sebe!
                    </p>
                    <div className='buttons'>
                        <Link to='/register' className='btn btn-primary'>
                            Registruj se
                        </Link>
                        <Link to='/login' className='btn btn-light'>
                            Prijavi se
                        </Link>
                    </div>
                </div>
            </div>
        </section>
    );
};

Landing.propTypes = {
    isAuthenticated: PropTypes.bool,
};

const mapStateToProps = (state) => ({
    isAuthenticated: state.auth.isAuthenticated,
});
export default connect(mapStateToProps)(Landing);
